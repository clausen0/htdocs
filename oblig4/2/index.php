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
        
        <form action="input" mkethod="POST">
            <input  tpye="text" name="name"><br>
            <input type="radio" name="number" value="1">
            <input type="radio" name="number" value="5">
            <input type="radio" name="number" value="10"><br>
            <input type="submit" value="send inn">
        </form>

        <?php
            if(empty($_POST["name"]) && empty($_POST["number"])){
                $navn = $_POST["name"];
                $antall = $_POST["number"];

                    if ($antall == "1"){
                        echo $navn;
                    }
                    
                    elseif ($antall == "5"){
                        for($i = 1; $i < 6; $i++){
                            echo $antall;                            
                        }
                            
                    }
                    
                    elseif ($antall == "10"){
                        for($i = 1; $i < 11; $i++){
                            echo $antall;
                        }

                    }
                    return;
            };

        ?>
    </body>
</html>