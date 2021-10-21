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
            <li class="navbar-item"><a href="index.php">forum</a></li>
            <li class="navbar-item"><a href="tabell.php">tabell</a></li>
        </ul>
    <?php
        $writefile = fopen("karakter.txt", "a") or die("Unable to open file!");
        $readfile = fopen("karakter.txt", "r") or die("Unable to open file!");
        
        if(isset($_POST["navn"]) && isset($_POST["score"])){
            $name = $_POST["navn"];
            $score = $_POST["score"];

            fwrite($writefile, "$name; $score\n");

        }
        
        while(!feof($readfile)){
            echo fgets($readfile). "<br>";
        }
                    
        fclose($writefile);
        fclose($readfile);
    ?>
    </body>
</html>
