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
        </ul>
    <?php
        $writefile = fopen("sitat.txt", "w") or die("Unable to open file!");
        $readfile = fopen("sitat.txt", "r") or die("Unable to open file!");
        
        if(isset($_POST["sitat"]) && isset($_POST["forfatter"])){
            $sitat = $_POST["sitat"];
            $forfatter = $_POST["forfatter"];

            fwrite($writefile, "$sitat, -$forfatter");
        } 
            
        echo fgets($readfile);
        fclose($writefile);
        fclose($readfile);
    ?>
    </body>
</html>

