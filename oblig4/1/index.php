<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="../6/stylesheet" href="../../ForsideStyle.css">
</head>
<body>
    <ul class="navbar">
        <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
        <li class="navbar-item"><a href="../index.php">tilbake</a></li>
    </ul>
    <h1>Navn</h1>
    <form action="index.php" method="POST">
        <input type="text" name="name"><br>
        <input type="submit" value="send inn">
    </form>


    <?php
        /*
        Oppgave 1 Enkel brukerinput og løkke
        a)	Lag en enkeltside form, hvor bruker kan skrive inn navnet sitt og trykke på en submit-knapp. Ta imot bruker input, og skriv ut dette 5 ganger med en bindestrek som skille.
        b)	Skriv kode Som oppgave a men ved hjelp av en for-løkke. 
        */

        if (!empty($_POST["name"])) {

            $name = $_POST["name"]; // echo $name;

            //lage teller før løkka
            //lage whileløkke som teller frem til teller er 5
                //printe ut navnet + -
                //øke teller med 1
            

            $x = 1;

            while($x < 6){
                echo "hei, $name <br>";
                $x++;
            }

            // for($i = 1; $i < 6; $i++){
            //     echo $i.".".$name ."-";
            // }
            // return;
        }

    ?>
</body>
</html>