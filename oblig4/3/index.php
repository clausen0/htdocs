<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
        
        <form action="index.php" method="POST">
            <input  tpye="text" name="name"><br>
                <select name="values" id="values">
                    <option value="1">1</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                </select>
            <input type="submit" value="send inn">
        </form>

        <?php
            if(isset($_POST["name"]) && isset($_POST["values"])){
                $navn = $_POST["name"];
                $antall = $_POST["values"];

                for($i = 0; $i < $antall; $i++){
                    echo $navn;                            
                }
            };

        ?>
    </body>
</html>