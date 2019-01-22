<?php

// Creation of a class Person
class Person{
    // Declaration of attributes
    private $firstName;
    private $name;
    private $birthday;

    // Setting of constructor
    function __construct($firstName,$name,$birthday){
        $this->firstName = $firstName;
        $this->name = $name;
        $this->birthday = new Date($birthday->getDay(),$birthday->getMonth(),$birthday->getYears());
    }

    // Settings of getters, to have attribute's value
    function getFisrtName(){
        return $this->firstName;
    }
    function getName(){
        return $this->name;
    }
    function getBirthday(){
        return $this->birthday;
    }

    // Settings og setters, to change attribute's value
    function setFirstName($prenom){
        $this->FirstName = $prenom;
    }
    function setName($nom){
        $this->name = $nom;
    }
    function setBirthday($day,$month,$years){
        $this->birthday->setDay($day);
        $this->birthday->setMonth($month);
        $this->birthday->setYears($years);       
    }
}


?>