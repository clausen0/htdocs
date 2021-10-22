<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
        <style>
            table{
                text-align:center;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
            <li class="navbar-item"><a href="index.php">forum</a></li>
        </ul>

        <table border="1">
            <thead>
                <tr>
                    <th>Navn</th>
                    <th>Poeng Sum</th>
                </tr>
            </thead>
            <tbody>
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

                    while(!feof($myFile)) {
                        $data = explode(';', fgets($myFile));

                        if(isset($data[1])) {
                            echo "<tr>";
                            echo "<td>" . trim($data[0]) . "</td>";
                            echo "<td>" . trim($data[1]) . "</td>";
                            echo "</tr>";
                        }
                    }
        
                    fclose($myFile);
                ?>
            </tbody>
        </table>
    </body>
</html>