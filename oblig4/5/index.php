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
                    <li><img src="../../img/Oblig4(5A).PNG"></li>
                    <li><img src="../../img/Oblig4(5B).PNG"></li>
                    <li><img src="../../img/Oblig4(5C).PNG"></li>
                </ol>
            </li>
        </ol>

        <?php
            $navn = array("Sander", "Linus", "Sebastian", "thomas", "Marius", "Tobias", "Erling", "Luan", "Jovan", "Oscar", "Syhmon", "Steinar", "Fredrik");
            
            /*
            foreach($navn as $navn){
                echo "$navn <br>";
            }
            */

            /*
            $teller = 0;
            while((count($navn)-1) >= $teller){
                echo($navn[$teller]). "<br>";
                $teller++;
            }
            */
            /*
            $teller = 0;
            count($navn);

            for($navn >= $teller){
                echo($navn[$teller]);
                $teller++;
            }
            */

        ?>
    </body>
</html>