<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/styles.css");
        </style>
        
        <?php
            $form1 = $_GET['form1'];
            $form2 = $_GET['form2'];
            $form3 = $_GET['form3'];
            $form4 = $_GET['form4'];
            $form5 = $_GET['form5'];
        ?>
        
    </head>
    
    <?php
        switch($form1)
        {
        case "A":
            echo "<body class= 'selectA'>";
            break;
        case "B":
            echo "<body class= 'selectB'>";
            break;
        case "C":
            echo "<body class= 'selectC'>";
            break;
        case "D":
            echo "<body class= 'selectD'>";
            break;
        default:
            echo '<body class= "selectD">';
            break;
        }
        
    ?>
    <!-- <body> -->
    <h1>
        <?php if ($form3 == "On") { echo "<div class = 'radioON'>"; } ?>
        Forms project
    </h1>
    <h2>
        This is a website where i test out several forms.
    </h2>
        
        
            This website does not do anything interesting.  I started this to late. I wish i had an example of what a finished version could be like.
        <form>
            
            <select name="form1">
                 <option value="">        </option>
                 <option value="A"> Red </option>
                 <option value="B"> Green </option>
                 <option value="C"> Blue </option>
                 <option valud="D"> Light Grey</option>
            </select>
            
            
            <br />
            <input type="text" name="form2" value="animal">
            
            <br />
            
            <div class = "radio">
                <label> Off </label>
                <input type="radio" name = "form3" value = "Off" />
            
                <label> On - this currently doesn't do anything </label>
                <input type="radio" name = "form3" value = "On" />
            </div>
            
            <!-- <input type="textarea" name="form4"/> -->
            
            <textarea rows="3" cols="40" name ="form4" maxlength = 120></textarea>
            <br />
            
            
            
            <label> Number </label>
            <input type="number" name="form5" min="1" max="120">

            <input type="submit" value ="Submit" />
        </form>
        
        
        <table>
            
            
        </table>
        <div id = "input">
            <?php
            echo $form1;
            echo "<br />";
            echo $form2;
            echo "<br />";
            echo $form3;
            echo "<br />";
            echo $form4;
            echo "<br />";
            echo $form5;
            ?>
        </div>
        <div id = output>
            
            <?php
            
            if ($form2 != "animal")
            {
                echo "I was going to add a bunch of animal pictures and have it display one based on the second input but i ran out of time.";
                echo "<br />";
                
                switch ($form2)
                {
                    
                }
            }
            
            
            
            
            if ($form5 != "")
            {$arrayofcharacters = str_split($form4, $form5);}
            else
            {$arrayofcharacters = str_split($form4, 1);}
            sort($arrayofcharacters);
            $length = count($arrayofcharacters);
            if ($length > 0)
            {
                for ($i = 0; $i < $length; $i++)
                {
                    echo $arrayofcharacters[$i];
                    echo "<br />";
                }
            }
            ?>
            
            
        </div>
    </body>
</html>