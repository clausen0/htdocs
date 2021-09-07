<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <li><a class="active" href="../index.php">Forside</a></li>
            <form method="POST">
                <input type="text" name="navn"> navn: <br>
                <input type="number" name="height"> høyde: <br>
                <input type="number" name="weight"> vekt: <br><br>
                Kjønn:
                    <input type="radio" name="gender" value="female">Kvinne
                    <input type="radio" name="gender" value="male">Mann
                    <input type="radio" name="gender" value="other">Annet<br>
                <input type="submit">
            </form>

         <?php
            //Ta imot det som bruker sender inn - lagre i php-variabler
            if (isset($_POST["navn"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["gender"])){
                $navn = $_POST["navn"]; 
                $hoyde = $_POST["height"]; 
                $vekt = $_POST["weight"]; 
                
            $heightInMs = $hoyde/100;

            //Beregne bmi med korrekt formel
            $bmi =  $vekt/($heightInMs*$heightInMs);

            //Sjekke kjønn 

            //Deretter sjekke bmi og skrive riktig melding
            if ($bmi < 17){
                echo "$navn, du må spise mer mat";
            }
            elseif($bmi >= 17 && $bmi <25){
                echo "$navn, du fungerer";
            }
            else{
                echo "$navn, du burde gå ned litt på fastfooden";
            }



            }
         ?>
    </body>
</html>