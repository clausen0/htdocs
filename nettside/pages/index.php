<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1 class="HovedTekst">Clausens Nettbutikk</h1>

    
<div class="innskudd">
    <form action="index.php" method="post">
        Navn: <input type="text" name="navn"><br>
        E-post <input type="text" name="E-post"><br>
        <input type="submit">
    </form>
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