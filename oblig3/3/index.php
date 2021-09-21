<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../../ForsideStyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <ul class="navbar">
        <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
        <li class="navbar-item"><a href="../index.php">tilbake</a></li>
    </ul>
    <table border="2">
        <thead>
            <tr>
                <th>Referanse</th>
                <th>Logisk utrykk</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>$x ulik $y</th>
                <th>$Y != $X</th>
            </tr>
            <tr>
                <th>$x lik $y</th>
                <th>$X == $Y</th>
            </tr>
            <tr>
                <th>$x lik $y ELLER $y ulik $x</th>
                <th>$X == $Y || $Y != $X</th>
            </tr>
            <tr>
                <th>$x lik $y og $y lik $z, ELLER $z større enn eller lik $x</th>
                <th>$X == $Y && $Y == $X || $Z >= $X</th>
            </tr>
            <tr>
                <th>$x er større enn $y OG $y er større enn $z</th>
                <th>$x > $y && $x > $z</th>
            </tr>
            <tr>
                <th>$x er lik $y OG $y er lik $z</th>
                <th>$x == $y && $y == $z</th>
            </tr>
        </tbody>
    </table>
</body>
</html>