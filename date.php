<?php

// Creation of a class date
class Date{
    // Declaration of attributes
    private $day;
    private $month;
    private $years;

    // Setting of constructor
    function __construct($day,$month,$years){
        $this->day = $day;
        $this->month = $month;
        $this->years = $years;
     }

    // Settings of getters, to have attribute's value
    function getDay(){
        return $this->day;
    }
    function getMonth(){
        return $this->month;
    }
    function getYears(){
        return $this->years;
    }

    // Settings of setters, to change attribute's value
    function setDay($jour){
        $this->day = $jour;
    }
    function setMonth($mois){
    $this->month = $mois;
    }
    function setYears($annee){
        $this->years = $annee;        
    }
}


?>