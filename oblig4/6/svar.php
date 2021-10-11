<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
    </head>
    <body style="text-align: center;">
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>

        <?php
            if(isset($_POST["name"]) && isset($_POST["adresse"]) && isset($_POST["Hjemme"]) && isset($_POST["Her"]) && isset($_POST["values"]) && isset($_POST["ekstraOst"]) && isset($_POST["ikkeEkstraOst"])){
                $name = $_POST["name"];
                $adress = $_POST["adresse"];
                $home = $_POST["hjemme"];
                $here = $_POST["her"];
                $value = $_POST["values"];
                $excheese = $_POST["ekstraOst"];
                $cheese = $_POST["ikkeEkstraOst"];

                echo "takk for bestilingen din". $name;

                if ($value == "1"){
                    if ($excheese == TRUE){
                        echo "du har bestiltt en hawai pizza med ekstra ost";
                    }
                    else{
                        echo "du har bestlit en hawai pizza";
                    }
                }
                
                    elseif ($value == "2"){
                        if ($excheese == TRUE){
                            echo "du har bestiltt en margarita pizza med ekstra ost";
                        }
                        else{
                            echo "du har bestlit en margarita pizza";
                        }
                    }

                    elseif ($value == "3"){
                        if ($excheese == TRUE){
                            echo "du har bestiltt en taco pizza med ekstra ost";
                        }
                        else{
                            echo "du har bestlit en taco pizza";
                        }
                    } 

                if ($home == TRUE){
                    echo "din pizza leveres til" $home;
                }
                    else {
                        echo "pizzaen din kommer snart til bordet";
                    }
            } 
        ?>
    </body>
</html>