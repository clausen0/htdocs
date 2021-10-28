<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
        <?php include("person.php"); ?>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
        <?php
        $sander = new elev("Sander Clausen", 18, 112, "sanderc@viken.no", "har ingen",  "3Data", "Jon");

        echo "sander sitt fulle navn er : " . $sander->get_name() . "<br>";
        echo "sander sin alder : " . $sander->get_age() . "<br>";
        echo "ikke sander sitt nummer er : " . $sander->get_nummer() . "<br>";
        echo "sander sin epost er : " . $sander->get_epost() . "<br>" ;
        echo "sander sitt elev nummer er : " . $sander->get_eNummer() . "<br>" ;
        echo "sander sin elevgruppe er : " . $sander->get_elevgruppe() . "<br>" ;
        echo "sander sin kontakt lærer er : " . $sander->get_kLærer() . "<br>" . "<br>";


        $linus = new elev("Linus Gylsetg", 17, 112, "linusg@viken.no", "har ingen",  "3Data", "Jon");


        echo "linus sitt fulle navn er : " . $linus->get_name() . "<br>";
        echo "linus sin alder er : " . $linus->get_age() . "<br>";
        echo "linus sitt nummer er : " . $linus->get_nummer() . "<br>";
        echo "linus sin epost er : " . $linus->get_epost() . "<br>" ;
        echo "linus sitt elev nummer er : " . $linus->get_eNummer() . "<br>" ;
        echo "linus sin elevgruppe er : " . $linus->get_elevgruppe() . "<br>" ;
        echo "linus sin epost er : " . $linus->get_kLærer() . "<br>" . "<br>";
 

        $marius = new elev("Marius Jensen", 18, 113, "MariusJ@viken.no", "har ingen",  "3Data", "Jon");


        echo "marius sitt fulle navn er : " . $marius->get_name() . "<br>";
        echo "marius sin alder er : " .  $marius->get_age() . "<br>";
        echo "marius sitt nummer er : " . $marius->get_nummer() . "<br>";
        echo "marius sin epost er : " . $marius->get_epost() . "<br>" ;
        echo "marius sitt elev nummer er : " . $marius->get_eNummer() . "<br>" ;
        echo "marius sin elevgruppe er : " . $marius->get_elevgruppe() . "<br>" ;
        echo "marius sin kontakt lærer er : " . $marius->get_kLærer() . "<br>" . "<br>";
        ?>
    </body>
</html>