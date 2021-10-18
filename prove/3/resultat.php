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
    <?php
        if(isset($_POST["Variabel1"]) && isset($_POST["Variabel2"]) && isset($_POST["operator"])){
            $x = $_POST["Variabel1"];
            $y = $_POST["Variabel2"];
            $action = $_POST["operator"];

            // echo $x;
            // echo $y;
            $addere = $x + $y;
            $subtrahere = $x - $y;
            $dele = $x / $y;
            $gange = $x * $y;
            $opphøyd = pow($x, $y);

            if($_POST["operator"] == "pluss"){
                echo $addere;
            }
            elseif($_POST["operator"] == ("minus")){
                echo $subtrahere;
            }
            elseif($_POST["operator"] == ("gange")){
                echo $gange;
            }
            elseif($_POST["operator"] == ("dele")){
                echo $dele;
            }
            elseif($_POST["operator"] == ("Opphøyd")){
                echo $opphøyd;
            }
        }
    ?>
    <!-- start med å skrive inn de inputtene man trenger, 2 text form for verdiene og nedtrekk eller radio buttons for hvilken opperasjon som skal skje.
    etterfulgt av dette skal man lage en egen fil som tar imot data fra formen. Her skal det lages noe som sjekker om det er fylt ut, gjenre isset. 
    lag funksjon for de forskjellige operasjonene som skal foretas. en for hver lage en if kode som sjekker hvilken operasjon som er valgt og avslutt med å echo funksjonen som skal bli printet ut -->
    </body>
</html>