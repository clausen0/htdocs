<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
        <style>
            table{
                border-style:solid;
                border-widht:2px;
            }
        </style>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
            <li class="navbar-item"><a href="index.php">forum</a></li>
        </ul>
        <?php
            if(!file_exists("karakter.txt")){
                echo "filen finnes ikke";
                exit;
            }

            $myFile = fopen("karakter.txt", "r");

            if(!$myFile){
                echo "filen kan ikke åpnes";
                exit;
            }

            echo "<tabel>";
            $teller = 1;

            while(!feof($myFile)){
                $read = fgets($myFile);
                echo "<tr><td>$teller</td></tr>";
                echo "<td>$read</td><br>";
                $teller++;
            }
            
            echo "</table>";
            
            fclose($myFile);
        ?>
    </body>
</html>