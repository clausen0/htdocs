<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style.css?<?= filemtime("../style.css") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <ul class="topnav">
        <li><a class="active" href="../forside.php">Forside</a></li>
        <li><a href="#news">Kontakt modul</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="right"><a href="../forside.php">Tilbake</a></li>
    </ul>

    <h1 class="HovedTekst">Clausens Nettbutikk</h1>

    <div class="navbar">
        <p><a href="./Person/person.php">Person</a></p>
        <p><a href="./Firma/Firma.php">Firma</a></p>
        <p><a href="./Person/endre.php"> Endringer til en person?</a></p>
        <p><a href="./Person/slett.php"> Slette noen??</a></p>
        <p><a href="./Firma/endre.php"> Endringer til et Firma?</a></p>
        <p><a href="./Firma/slett.php"> Slette et firma?</a></p>
        <p><a href="./info/info.php">Ønsker du å finne noe imrofasjon om personer eller firma?</a></p>
    </div>
</body>

</html>