<!DOCTYPE html>
<html lang="en">
<head>
  <title>Informasjon</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1 class="HovedTekst">Clausens Nettbutikk</h1>

        
    <div class="innskudd">
        <div class="forum">
            <form action="index.php" method="post">
                <label for="Navn">Navn:</label><br>
                <input type="text" id="Navn" name="navn"><br>
                <label for="Epost">E-post adresse:</label><br>
                <input type="text" id="Epost" name="E-post"><br>
                <label for="nummer">Nummer:</label><br>
                <input type="text" id="nummer" name="Nummer"><br>
                <label for="gender">Kjønn:</label>
                <div class="kjonn">
                    <input type="radio" id="gender" name="gender">Mann 
                    <input type="radio" id="gender" name="gender">Kvinne 
                    <input type="radio" id="gender" name="gender">Annet 
                </div>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>

    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";

        //lager en connection med databasen
        $conn = mysqli_connect($servername, $username, $password); 

        //sjekker forbinnelsen med serveren
        if(!$conn){
            die("Connection Failed: " . mysqli_connect_error());
        }
        echo "Connected Sucesfully";
    ?>

</body>
</html>