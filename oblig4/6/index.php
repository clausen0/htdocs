<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
    </head>
    <body style="text-align: center;">
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>

        <h1>Navn</h1>
            <form action="svar.php" method="POST">
                <input type="text" name="name"><br>
                <h3>Adresse</h3>
                <input type="text" name="adresse"><br>
                <h3>Hvor ønsker du å spise?</h3>
                <input type="radio" value="Hjemme">Hjemme
                <input type="radio" value="Her">Her
                <h3>Hvilken pizza ønsker du å spise?</h3>
                <select name="values" id="values">
                    <option value="1">Hawai Pizza</option>
                    <option value="2">Margarita Pizza</option>
                    <option value="3">Taco Pizza</option>
                </select><br>
                <h3>Ønsker du noe ekstra?</h3>
                <input type="radio" value="ekstraOst">Ekstra ost?<br>
                <input type="radio" value="ikkeEkstraOst">ingen ting ekstra?<br>
                <input type="submit" value="send inn">
                <input type="reset" value="Reset">
            </form>

        <?php

        ?>
    </body>
</html>