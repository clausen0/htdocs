<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../ForsideStyle.css">
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
    <?php
    //løkke som hetner en og en vedri i arrayen og echoer med bokstav ved siden av nummeret den er i alfabetet
        $alfabet = array(A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, Æ, Ø, Å);

        foreach($alfabet as $alf) {
            echo $alf;
        }
    ?>
    </body>
</html>