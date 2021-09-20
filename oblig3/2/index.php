<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../../ForsideStyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <ul>
        <li><a class="active" href="../../index.php">Forside</a></li>
        <li><a href="../index.php">tilbake</a></li>
    </ul>
    <ol class="main">
        <li>Oppgave 2 (variabler = $A = 3 $B = 5 $C = 8 $D = False)</li><br>
            <ol class="second">
                <li>False(($a > $b) && ($a+$b == $c))</li><br>
                <li>True (($a > $b) || ($a+$b == $c))</li><br>
                <li>True (!($a > $b))</li><br>
                <li>True (!$d || false)</li><br>
                <li>True (($a == 2 || $b == 5) && ($d != ( $a < $b) ))</li><br>
                <li>False (($a > $b) && ( ( ($a == 2 || $b == 5 ) && ($d != ( $a < $b) ) ) != ($d && $d) ) )</li><br>
                <li>True (($a < $b) || ( ( ($a == 2 || $b == 5 ) && ($d != ( $a < $b) ) ) != ($d && $d) ) )</li><br>
            </ol>
    </ol>
</body>
</html>