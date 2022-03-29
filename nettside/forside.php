<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?<?=filemtime("style.css")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul class="topnav">
        <li><a class="active" href="./forside.php">Forside</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><div class="dropdown"><a>Kontakt modul</a>
            <div class="dropdown-content">  
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
            </div>
            </div>
        </li>
    </ul>

    <h1 class="HovedTekst">Clausens Nettbutikk</h1>
    <div class="navbar">
        <p><a href="Kontakt/Kontakt.php">Kontakt modul</a></p>
        <p><a href="Produkt/index.php">Produkt modul</a></p>
    </div>
</body>
</html>