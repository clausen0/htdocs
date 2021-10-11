<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="../6/stylesheet" href="../ForsideStyle.css">
</head>
<body>
    <ul class="navbar">
        <li class="navbar-item"><a class="active" href="../index.php">Forside</a></li>
        <li class="navbar-item"><a href="../index.php">tilbake</a></li>
    </ul>
    <p><a href="Javascript/test.js">JS</a></p>
    <?php

    $hello = "hei";

    function Hello (){
        for($i = 0; $i < 5; $i++){
            echo $hello;
        }
        return;
    }
    ?>
</body>
</html>