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
        $MyFile = fopen("file.txt", "w") or die("Unable to 	open file!");
        $readFile = fopen("file.txt", "r") or die("Unable to open file!");
        fwrite($MyFile, "A wise man can learn more from his enemies than a fool from his friends.\n");
        fwrite($MyFile, "Do, or do not. There is no “try”\n");
        fwrite($MyFile, "Every man dies, but not every man really lives.\n");
        fwrite($MyFile, "Great men are not born great, they grow great.\n");
        fwrite($MyFile, "It’s what you do right now that makes a difference.\n");
        fwrite($MyFile, "If you focus on what you left behind, you will never be able to see what lies ahead.\n");
        fwrite($MyFile, "It is not our abilities that show what we truly are… it is our choices.\n");
        fwrite($MyFile, "I belive whatever doesn't kill you, simply makes you stronger\n");
        fwrite($MyFile, "Get busy livin, or get busy dying\n");
        fwrite($MyFile, "To call you stupid would be an insult to stupid people!\n");
        fwrite($MyFile, " Yesterday is history, tomorrow is a mystery, and today is a gift.\n");

        while(!feof($readFile)){
            echo fgets($readFile). "<br>";
        }

        fclose($MyFile);
        fclose($readFile);

        ?>
    </body>
</html>