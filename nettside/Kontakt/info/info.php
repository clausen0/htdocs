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
        <li><a href="#news">Kontakt modul</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="right"><a href="../Kontakt.php">Tilbake</a></li>
    </ul>
    <h1 class="HovedTekst">Clausens Nettbutikk</h1>


    <div class="personer">
        <form action="info.php" method="post">
            <input type="text" id="person" name="Persons"><br>
            <input type="submit">
        </form>
    </div>

    <div class="firmaer">
        <form action="info.php" method="post">
            <input type="text" id="firma" name="firmaer"><br>
            <input type="submit">
        </form>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Persons = isset($_POST['Persons']);
        $Firm = isset($_POST['firmaer']);


        //lager en conection til databasen
        $conn = new mysqli($servername, $username, $password, `BuSy`);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected Sucesfully", "<br>";

        // $sql = "SELECT * FROM personer WHERE `Navn` LIKE `%$Persons%`";
        $sql = "SELECT * FROM personer";

        $results = $conn->query($sql);

        echo $sql, "<br>";
        if (!empty($result->num_rows) && $result->num_rows > 0) { //sjekker om det er tomt i results. Hvis det er det kommer en feilmelding. Vært et problem mens jeg lagde koden
            if ($results->num_rows > 0) {
                //lage kode for å sjekke eter søke feltet
                echo "id: " . $row["id"] . " - Navn: " . $row["Navn"] . "<br>" . " - Epost" . $row["Epost"] . "<br>" . " - Nummer" . $row["Nummer"] . "<br>" . " - kjønn" . $rows["kjønn"];
            } else {
                echo "0 results";
            }
        } else {
            echo "feil";
        }
    }

    ?>
</body>

</html>