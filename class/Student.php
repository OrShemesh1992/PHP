<?php


class Student
{
    var $name;
    var $major;
    var $gpa;


    function __construct($major , $gpa,$name="or"){
        $this->name=$name;
        $this->major=$major;
        $this->gpa=$gpa;
    }

    function  hasHonors(){
        if($this->gpa >= 3.5){
            return "true";
        }else{
            return "false";
        }
    }
}

$s1 = new Student("Business",2.5);

$s2 = new Student("Art",2.5,"Pam");

echo $s2->hasHonors();

?>