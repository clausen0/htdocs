<?php
class person{
    protected $navn;
    protected $age;
    protected $nummer;
    protected $epost;

    function get_name(){
        return $this->navn; 
    }

    
    function get_age(){
        return $this->age; 
    }

    
    function get_nummer(){
        return $this->nummer; 
    }

    
    function get_epost(){
        return $this->epost; 
    }
}

class elev extends person{
    private $studentNummer;
    private $elevgruppe;
    private $kLærer;

    function __construct($navn, $age, $nummer, $epost, $studentNummer, $elevgruppe, $kLærer){
        $this->navn = $navn;
        $this->age = $age;
        $this->nummer = $nummer;
        $this->epost = $epost;
        $this->studentNummer = $studentNummer;
        $this->elevgruppe = $elevgruppe;
        $this->kLærer = $kLærer;
    }

    function get_eNummer(){
        return $this->studentNummer;
    }

    function get_elevgruppe(){
        return $this->elevgruppe;
    }

    function get_kLærer(){
        return $this->kLærer;
    }
}
?>