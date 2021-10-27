<html>
    <head>
        <title>OOP</title>
        <link rel="stylesheet" href="../../../ForsideStyle.css">
        <?php include("class_lib.php"); ?>
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
    <?php
        $sander = new elev("3data", "Jon");

        $sander->set_name("Sander Clausen");
        $sander->set_number(110);
        $sander->set_age(18);
        $sander->set_epost("sancla@live.no");
        // $sander->set_class("3DAA");
        // $sander->set_kTeacher("jon");

        echo "sander sitt fulle navn er : " . $sander->get_name() . "<br>";
        echo "sander sitt falske nummer er : " . $sander->get_number() . "<br>";
        echo "sander sin alder er : " .   $sander->get_age() . "<br>";
        echo "sander sin perosnlige epost er : " . $sander->get_epost() . "<br>";
        echo "sander går i klassen : ". $sander->get_class() . "<br>" ;
        echo "sander sin kontakt lærer er : " . $sander->get_kTeacher() . "<br>" . "<br>";

        $linus = new elev("3data", "Jon");

        $linus->set_name("Linus Gylseth");
        $linus->set_number(112);
        $linus->set_age(17);
        $linus->set_epost("linusg@viken.no");
        // $linus->set_class("3data");
        // $linus->set_kTeacher("Jon");

        echo "linus sitt fulle navn er : " . $linus->get_name() . "<br>";
        echo "linus sitt nummer er : " . $linus->get_number() . "<br>";
        echo "linus sin alder er : " . $linus->get_age() . "<br>";
        echo "linus sin epost er : " . $linus->get_epost() . "<br>" ;
        echo "linus går i klassen : ". $linus->get_class(). "<br>" ;
        echo "linus sin kontakt lærer er : ". $linus->get_kTeacher(). "<br>". "<br>";

        $marius = new elev("3data", "Jon");

        $marius->set_name("Marius Jensen");
        $marius->set_number(113);
        $marius->set_age(18);
        $marius->set_epost("mariusj@viken.no");
        // $marius->set_class("3data");
        // $marius->set_kTeacher("Jon");

        echo "marius sitt fulle navn er : " . $marius->get_name() . "<br>";
        echo "marius sitt nummer er : " . $marius->get_number() . "<br>";
        echo "marius sin alder er : " .  $marius->get_age() . "<br>";
        echo "marius sin epost er : " . $marius->get_epost() . "<br>" ;
        echo "marius går i klassen : " . $marius->get_class() . "<br>";
        echo "marius sin kontakt lærer er : ". $marius->get_kTeacher(). "<br>" . "<br>";
    ?>
    </body>
</html>