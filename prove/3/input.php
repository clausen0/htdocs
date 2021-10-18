<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../ForsideStyle.css">
        <style>
            body {text-align: center;}
        </style>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
        <form action="resultat.php" method="POST">
            <h3>Variabel 1</h3>
            <input type="text" name="Variabel1">
            <h3>Variabel 2</h3>
            <input type="text" name="Variabel2">
            <h3>Operator</h3>
            <select name="operator">
                <option value="pluss">+</option>
                <option value="minus">-</option>
                <option value="gange">*</option>
                <option value="dele">:</option>
                <option value="Opphøyd">Tall 1 opphøyd i tall 2</option>
            </select><br>
            <input type="submit" value="send inn">
        </form>
    <!-- start med å skrive inn de inputtene man trenger, 2 text form for verdiene og nedtrekk eller radio buttons for hvilken opperasjon som skal skje.
    etterfulgt av dette skal man lage en egen fil som tar imot data fra formen. Her skal det lages noe som sjekker om det er fylt ut, gjenre isset. 
    lag funksjon for de forskjellige operasjonene som skal foretas. en for hver lage en if kode som sjekker hvilken operasjon som er valgt og avslutt med å echo funksjonen som skal bli printet ut -->
    </body>
</html>