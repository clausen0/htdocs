<!DOCTYPE html>
<html>
    <head>
        <title>BMI kalkulator</title>
        <link rel="stylesheet" href="bmistyle.css">
    </head>
    <body>
        <h1>BMI kalkulator</h1>
        <form action="bmikalk.php" method="post">
            <p>Hva heter du?</p>
            <input type="text" name="name"><br>
            <p>Hvor høy er du i cm?</p>
            <input type="text" name="height"><br>
            
            <p>Hvor mye veier du i kg?</p>
            <input type="text" name="weight"><br>
            <p>Er du mann eller dame?</p>
            <input type="radio" name="gender" value="male" checked>Mann<br>
            <input type="radio" name="gender" value="female">Dame<br><br>
            <input type="submit" value="Send inn">
            <input type="reset" value="Reset">
        </form>

        <?php
            if (empty($_POST["name"]) && empty($_POST["height"]) && empty($_POST["weight"]) && empty($_POST["gender"])) return;
            $navn = $_POST["name"];
            $hoyde = $_POST["height"];
            $vekt = $_POST["weight"];
            $kjonn = $_POST["gender"];
            $hoydeIMS = $hoyde/100;
            $bmi = $vekt/($hoydeIMS*$hoydeIMS);

            if ($kjonn == "male") {
                if ($bmi < 17){
                    echo "$navn, du er tynn"; 
                }
                elseif($bmi >= 17 && $bmi<25){
                    echo "$navn, du er grei";
                }
                else{
                    echo "$navn, du er overvektig";
                }
            }
            elseif ($kjonn == "female"){
                if ($bmi < 17){
                    echo "$navn, du er litt under normal"; 
                }
                elseif($bmi >= 17 && $bmi<25){
                    echo "$navn, du er normal";
                }
                else{
                    echo "$navn, du er litt over normal";
                }
            }
        ?>
    </body>
</html>