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

    <h2>Endre personopplysninger?</h2>
    <div class="innskudd">
        <div class="forum">
            <form action="person.php" method="post">
                <label for="Navn">Navn:</label><br>
                <select>
                <option selected value="0">Hvem vil du endre på?</option>
                    <?php
                        $SQL = new mysqli("localhost", "root", "", "busy");
                        if ($SQL->connect_error) die("Connection Failed: " . $conn->connect_error);
                        $res = $SQL->query("SELECT `id`, `Navn` FROM personer ORDER BY `Navn`;");
                        if($res->num_rows > 0) {
                            while($row = $res->fetch_assoc()) {
                                echo "<option value='" . $row["id"] ."'>" . $row["Navn"] . "</option>";
                            }
                        }
                    ?>
                </select><br>
                <label for="Epost">E-post adresse:</label><br>
                <input type="text" id="Epost" name="Epost"><br>
                <label for="nummer">Nummer:</label><br>
                <input type="text" id="nummer" name="Nummer"><br>
                <label for="gender">Kjønn:</label>
                <div class="kjonn">
                    <input type="radio" id="gender" name="gender">Mann
                    <input type="radio" id="gender" name="gender">Kvinne
                    <input type="radio" id="gender" name="gender">Annet
                </div><br>
                <h2>Endre hvilket firma?</h2>
                <label for="Firma">Firma:</label><br>
                <input type="text" id="Firma" name="Firma"><br>
                <label for="Stilling">Stilling:</label><br>
                <input type="text" id="Stilling" name="Stilling"><br>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //sjekker om metoden for requesten er post og ikke get.
        if (isset($_POST['navn']) && isset($_POST['Epost']) && isset($_POST['Nummer']) && isset($_POST['gender']) && isset($_POST['Firma']) && isset($_POST['Stilling'])) {
            $name = $_POST['navn'];
            $Epost = $_POST['Epost'];
            $Number = $_POST['Nummer'];
            $Gender = $_POST['gender'];
            $Firma = $_POST['Firma'];
            $Stilling = $_POST['Stilling'];

            //lager en connection med databasen
            $conn = new mysqli($servername, $username, $password, 'BuSy');

            //sjekker forbinnelsen med serveren
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }
            echo "Connected Sucesfully";

            $sql = "UPDATE personer ";
        }
    }
    ?>

</body>

</html>