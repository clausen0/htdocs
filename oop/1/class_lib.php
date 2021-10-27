<?php
class person{
    protected $name;
    protected $number;
    public $age;
    public $epost;

    function set_name($new_name){
        $this->name = $new_name;
    }

    function set_number($new_number){
        $this->number = $new_number;
    }

    function set_age($new_age){
        $this->age = $new_age;
    }

    function set_epost($new_epost){
        $this->epost = $new_epost;
    }

    function get_name(){
        return $this->name;
    }

    function get_number(){
        return $this->number;
    }

    function get_age(){
        return $this->age;
    }

    function get_epost(){
        return $this->epost;
    }
}

class elev extends person{
    private $class;
    private $kTeacher;

    function set_class($new_class){
        $this->class = $new_class;
    }

    function set_kTeacher($new_kTeacher){
        $this->kTeacher = $new_kTeacher;
    }

    function __construct($class, $kTeacher){
        $this->class = $class;
        $this->kTeacher = $kTeacher;
    }

    function get_class(){
        return $this->class;
    }

    function get_kTeacher(){
        return $this->kTeacher;
    }
}


?>