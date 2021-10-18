<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../ForsideStyle.css">
        <style>
            body {text-align: center;}
        </style>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
        <form action="" method="POST">
            <h3>Bil type</h3>
            <input type="text" name="car">
            <h3>CO2 utslipp pr mil</h3>
            <input type="text" name="utslipp">
            <h3>kjørelengde i året i km</h3>
            <input type="text" name="kjørelengde">
            <h3>Antall år du ønsker å beholde bilen</h3>
            <input type="text" name="beholde"><br>
            <input type="submit" value="send inn">
            <input type="reset" value="Reset">
        </form>
        <?php
            if(isset($_POST["car"]) && isset($_POST["utslipp"]) && isset($_POST["kjørelengde"]) && isset($_POST["beholde"])){
                $car = $_POST["car"];
                $utslipp = $_POST["utslipp"];                
                $lengde = $_POST["kjørelengde"];
                $beholde= $_POST["beholde"];

                $utslippPrKm = $utslipp/10;
                $CO2 = $lengde*($utslippPrKm/100);
                $CO2Tot = $CO2 * $beholde;
                //echo $CO2;
                for($x = 0; $x + 1 <= $beholde; $x++){
                    echo "År $x har utslippet vært $CO2, og total utslippet for alle år er $CO2Tot"."<br>";
                }
            }
            
        ?>
    </body>
</html>