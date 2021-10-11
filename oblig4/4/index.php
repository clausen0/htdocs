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
        
        <ol class="main">
            <li>
                <ol class="second">
                    <li><img src="../../img/print_r.PNG"></li>
                </ol>
            </li>
        </ol>


        <?php
        $tabell = array(1, 23, 34, 35, 54, 69, 70, 76, 83, 92);
        shuffle($tabell);
        print_r($tabell);
        ?>
    </body>
</html>