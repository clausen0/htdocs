<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
        <?php

        $readFile = fopen("../1/file.txt", "r") or die("Unable to open file!");
        $liste = array();
        $teller = 0;

        while(!feof($readFile)){
            $liste[$teller] = fgets($readfile);
            $teller++;
        }

        fclose($readFile);
        echo $liste[rand(0, count($liste)-1)];



        ?>
    </body>
</html>