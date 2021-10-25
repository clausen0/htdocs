<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../ForsideStyle.css">
</head>
<body>
    <ul class="navbar">
        <li class="navbar-item"><a class="active" href="../index.php">Forside</a></li>
        <li class="navbar-item"><a href="../index.php">tilbake</a></li>
    </ul>
    <p><a href="Javascript/test.js">JS</a></p>
    <p><img src="../img/JS-statement.PNG"></p>
    <script>
        alert("Er du sikker på om du vil forsette?");

        console.log("Bruker logget seg inn");
    </script>
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