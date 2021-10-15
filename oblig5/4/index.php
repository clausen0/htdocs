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
    $nr1 = 12;
    $nr2 = 6;

        function addere($nr1, $nr2){
            echo ($nr1 + $nr2);
        }
        function subtraksjon($nr1, $nr2){
            echo ($nr1 - $nr2);
        }
        function deling($nr1, $nr2){
            echo ($nr1 : $nr2);
        }
        function multiplikasjon($nr1, $nr2){
            echo ($nr1 * $nr2);
        }
        
        addere($nr1, $nr2);
        subtraksjon($nr1, $nr2);
        deling($nr1, $nr2);
        multiplikasjon($nr1, $nr2);
    ?>
    </body>
</html>