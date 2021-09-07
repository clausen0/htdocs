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
                $navn = $_POST["navn"]; echo $navn;
                $hoyde = $_POST["height"]; echo $navn;
                $vekt = $_POST["weight"]; echo $navn;
                
            $heightInMs = $hoyde/100;

            //Beregne bmi med korrekt formel
            $bmi =  $vekt/($heightInMs*$heightInMs);

            //Sjekke kjønn 

            //Deretter sjekke bmi og skrive riktig melding



            }
         ?>
    </body>
</html>