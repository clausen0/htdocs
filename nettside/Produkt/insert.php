<!DOCTYPE html>
<html lang="en">

<head>
    <title>ValgSide</title>
    <link rel="stylesheet" href="../style.css?<?= filemtime("../style.css") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <ul class="topnav">
        <li><a class="active" href="../forside.php">Forside</a></li>
        <li><a href="#news">Kontakt modul</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="right"><a href="./index.php">Tilbake</a></li>
    </ul>

    <h1 class="HovedTekst">Clausens Nettbutikk</h1>

    <div class="innskudd">
        <div class="forum">
            <form action="insert.php" method="post">
                <label for="Produkt">Produkt</label><br>
                <input type="text" id="Produkt" name="produkt"><br>
                <label for="Betegnelse">Betegnelse av produkt</label><br>
                <input type="text" id="Betegnelse" name="betegnelse"><br>
                <label for="PrisInn">Kjøpspris</label><br>
                <input type="text" id="PrisInn" name="prisinn"><br>
                <label for="PrisUt">Salgspris</label><br>
                <input type="text" id="PrisUt" name="prisut"><br>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    ?>
</body>


</html>