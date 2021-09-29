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
        
        <form action="index.php" method="POST">
            <input  tpye="text" name="name"><br>
            <input type="radio" name="number" value="1">1
            <input type="radio" name="number" value="5">5
            <input type="radio" name="number" value="10">10<br>
            <input type="submit" value="send inn">
        </form>

        <?php
            if(isset($_POST["name"]) && isset($_POST["number"])){
                $navn = $_POST["name"];
                $antall = $_POST["number"];

                for($i = 0; $i < $antall; $i++){
                    echo $navn;                            
                }
            };

        ?>
    </body>
</html>