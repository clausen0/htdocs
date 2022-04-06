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

    <!-- add label -->
    <div class="personer">
        <form action="info.php" method="post">
            <input type="text" id="person" name="Persons"><br>
            <input type="submit">
        </form>
    </div>

    <!-- add label -->
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
        $Persons = $_POST['Persons'];
        // $Firm = $_POST['firmaer'];


        //lager en conection til databasen
        $conn = new mysqli($servername, $username, $password, `busy`);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected Sucesfully", "<br>";

        // $sql = "SELECT * FROM personer WHERE `Navn` LIKE `%$Persons%`";
        $sql = "SELECT * FROM busy.personer WHERE 'Navn' like '%$Persons%'";

        //mulig feilen ligger her
        $results = $conn->query($sql);
        echo mysqli_error($conn);
        // $results = mysqli_query($conn, $sql);

        echo $sql, "<br>";
        // echo $results;
        // echo $results->fetch_all();

        // if (!empty($results->num_rows) && $results->num_rows > 0) { //sjekker om det er tomt i results. Hvis det er det kommer en feilmelding. Vært et problem mens jeg lagde koden
        if ($results) {
            //lage kode for å sjekke eter søke feltet
            while ($row = $results->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Navn: " . $row["Navn"] . "<br>" . " - Epost: " . $row["Epost"] . "<br>" . " - Nummer: " . $row["Nummer"] . "<br>" . " - kjønn: " . $row["kjønn"];
            }
        } else {
            echo "0 results";
        }
        //     } else {
        //         echo "feil";
        //     }
    }

    ?>
</body>

</html>