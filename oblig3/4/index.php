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
    <ol class="main">
        <li> oppgave 4<br>
            <ol class="second">
                <li>Enkel numerisk array <br> <img src="../../img/oppg4A.PNG"></a></li>
                <li>foreach løkke <br> <img src="../../img/foreach.PNG"></li>
                <li>printe ut tall som er under 25 <br> <img src="../../img/Under25.png"></li>
                <li>printe mellom 10 og 25 <br> <img src="../../img/Mellom10og25.png"></li>
                <li>printe antall som er over 10<br> <img src="../../img/AntallOver10.png"></li>
            </ol>
        </li>
    </ol>
    <?php
    $tall = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12,21, 24, 28, 31, 39, 43, 48);
    $over10 = 0;
        foreach($tall as $index => $verdi){
            $sum += $verdi;
            echo $sum;
            }
        
    ?> 
</body>
</html>