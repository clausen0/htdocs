<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css?<?=filemtime("../../style.css")?>">
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
            <form action="index.php" method="post">
                <label for="Navn">Navn:</label><br>
                <input type="text" id="Navn" name="navn"><br>
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
                <h2>Jobber Du i et firma?</h2>
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
        $servername = "localhost";
        $username = "root";
        $password = "";

        $name = $_POST['navn'];
        $Epost = $_POST['Epost'];
        $Number = $_POST['Nummer'];
        $Gender = $_POST['gender'];
        $Firma = $_POST['Frima'];
        $Stilling = $_POST['Stilling'];

        //lager en connection med databasen
        $conn = mysqli_connect($servername, $username, $password); 

        //sjekker forbinnelsen med serveren
        if(!$conn){
            die("Connection Failed: " . mysqli_connect_error());
        }
        echo "Connected Sucesfully";

        $sql = "INSERT INTO personer (Navn, Epost, Nummer, kjønn)
        VALUES($name, $Epost, $Number, $Gender)";


    ?>

</body>
</html>