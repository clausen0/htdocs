<?php
class person{
    var $name;
    var $number;
    var $age;
    var $epost;

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
    var $class;
    var $kTeacher;
    var $property

    function set_class($new_class){
        $this->class = $new_class;
    }

    function set_kTeacher($new_kTeacher){
        $this->kTeacher = $new_kTeacher;
    }

    function __constructor($property){
        $this->property = $property;
    }

    function get_class(){
        return $this->class;
    }

    function get_kTeacher(){
        return $this->kTeacher;
    }

    function get_property(){
        return $this->property;
    }
    ]
}


?>