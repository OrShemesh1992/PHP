<?php


class Student
{
    private $name;
    private $major;
    private $gpa;


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

    /**
     * @return mixed
     */
    public function getGpa()
    {
        return $this->gpa;
    }

    /**
     * @return mixed
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }
}

$s1 = new Student("Business",2.5);

$s2 = new Student("Art",2.5,"Pam");

echo $s2->getGpa();

?>