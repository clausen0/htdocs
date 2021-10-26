<!DOCTYPE html>
<html>
    <head>
        <title>Hovedside</title>
        <link rel="stylesheet" href="../../ForsideStyle.css">
    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="active" href="../../index.php">Forside</a></li>
            <li class="navbar-item"><a href="../index.php">tilbake</a></li>
        </ul>
        <?php
        $fornavn = "TEST";
        $etternavn = "Test";
        $adresse = "vei";
        $nummer = 123456;
            function assosiativArray($fornavn, $etternavn, $adresse, $nummer){
                $person1 = array("Fornavn" => $fornavn. "<br>", "Etternavn" => $etternavn. "<br>", "Adresse" => $adresse. "<br>", "Nummer" => $nummer. "<br>");
                if(isset($fornavn) && isset($etternavn) && isset($adresse) && isset($nummer)){
                    print_r($person1);
                }
                else{
                    echo "det oppsto en feil, venligst prøv på nytt";
                }
            }
            assosiativArray($fornavn, $etternavn, $adresse, $nummer);
        ?>
    </body>
</html>