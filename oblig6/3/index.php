<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
        <style>
            body {text-align: center;}
        </style>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>

        <form action="sitater.php" method="POST">
            <h3>Sitat</h3>
            <input type="text" name="sitat"><br>
            <h3>Forfatter</h3>
            <input type ="text" name="forfatter"><br>
            <input type="submit" value="send inn">
            <input type="reset" value="reset">
        </form>


    </body>
</html>