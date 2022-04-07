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


    <div class="innskudd">
        <div class="forum">
            <form action="Firma.php" method="post">
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
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>
</body>

</html>