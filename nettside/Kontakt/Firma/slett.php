<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css?<?= filemtime("../../style.css") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <ul class="topnav">
        <li><a class="active" href="../../forside.php">Forside</a></li>
        <li><a href="#news">Kontakt modul

            </a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="right"><a href="../Kontakt.php">Tilbake</a></li>
    </ul>
    <h1 class="HovedTekst">Clausens Nettbutikk</h1>

    <h2>hvem ønsker du å slette?</h2>
    <div class="innskudd">
        <div class="forum">
            <form action="slett.php" method="post">
                <select name="Person" id="Person">
                    <option selected value="0">Navn?</option>
                    <?php
                        $SQL = new mysqli("localhost", "root", "", "busy");
                        if ($SQL->connect_error) die("Connection Failed: " . $conn->connect_error);
                        $res = $SQL->query("SELECT `id`, `Navn` FROM firmaer ORDER BY `Navn`;");
                        if($res->num_rows > 0) {
                            while($row = $res->fetch_assoc()) {
                                echo "<option value='" . $row["id"] ."'>" . $row["Navn"] . "</option>";
                            }
                        }
                    ?>
                </select><br>
 
                <input type="submit">
            </form>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //sjekker om metoden for requesten er post og ikke get.
        if (isset($_POST['Person']) && $_POST['Person'] > 0) {
            $conn = new mysqli($servername, $username, $password, 'BuSy');

            //sjekker forbinnelsen med serveren
            if ($conn->connect_error) die("Connection Failed: " . $conn->connect_error);
            echo "Connected Sucesfully", "<br>";

            //legge inn kode for å samenligne fra firma tabell for å legge inn firma

            $sql = "DELETE FROM firmaer WHERE `id` = " . $_POST['Person'];

            echo $sql;

            $conn->query($sql);
        }
    }
    ?>

</body>

</html>