<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <body>
        <?php>
            $SQL = new mysqli("localhost", "root", "", "intel");

            if($SQL->connect_error) {
                die('conectino failed: ' . $SQL->connection_error);
            }

            $res = $SQL->querry(SELECT * FROM `cia`);

            if($res->num_rows > 0) {
                echo  "<ul>";

                while($row = $res->fetch_assoc()){
                    echo"<li>Name: ". $row["name"] . "</li>";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>