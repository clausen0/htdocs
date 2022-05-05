<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css?<?= filemtime("../../style.css") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '../../query.php' ?>
</head>

<body>
    <ul class="topnav">
        <li><a class="active" href="../../forside.php">Forside</a></li>
        <li><a href="#news">Kontakt modul</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="right"><a href="../Kontakt.php">Tilbake</a></li>
    </ul>
    <!-- <h1 class="HovedTekst">Clausens Nettbutikk</h1> -->


    <div class="innskudd">
        <div class="forum">
            <form action="endre.php" method="post">
                <label for="Navn">Navn:</label><br>
                <input type="text" id="Navn" name="Navn"><br>

                <label for="Adresse">Adresse:</label><br>
                <input type="text" id="Adresse" name="Adresse"><br>

                <label for="OrgNummer">OrgNummer:</label><br>
                <input type="text" id="OrgNummer" name="OrgNummer"><br>

                <label for="nummer">Nummer:</label><br>
                <input type="text" id="Nummer" name="Nummer"><br>

                <label for="web">Nettside:</label><br>
                <input type="text" id="Web" name="Web"><br>

                <input type="checkbox" id="KundeType" name="KundeType">Levrandør<br>

                <select name="Firma">
                    <option selected value="0">Hvilket firma ønsker du å endre på?</option>
                    <?php
                        $res = $SQL->query("SELECT `id`, `Navn` FROM firmaer ORDER BY `Navn`;");
                        if($res->num_rows > 0) {
                            while($row = $res->fetch_assoc()) {
                                echo "<option value='" . $row["id"] ."'>" . $row["Navn"] . "</option>";
                            }
                        }
                    ?>
                </select></br>

                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>

    <?php
        print_r($_POST);
        if(isset($_POST["Navn"]) && isset($_POST["Adresse"]) && isset($_POST["OrgNummer"]) && isset($_POST["Nummer"]) && isset($_POST["Web"]) && isset($_POST["Firma"])){
            $name = $_POST["Navn"];
            $Adress = $_POST["Adresse"];
            $ORG = $_POST["OrgNummer"];
            $Number = $_POST["Nummer"];
            $Site = $_POST["Web"];
            $Customer = isset($_POST["KundeType"]) ? 1 : 0;
            $Firma = $_POST["Firma"];

            $sql = "UPDATE `firmaer` SET `Navn` = '$name', `Adresse` = '$Adress', `OrgNummer` = $ORG, `Nummer` = '$Number', `web` = '$Site', `KundeType` = '$Customer' WHERE `id` = $Firma";
            $SQL->query($sql);
        }
    ?>
</body>

</html>