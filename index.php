<?php

// link to the others pages containing class
include ('date.php');
include ('person.php');

// Declaration of a variable that use the class Date
$birthday = new Date("10","09","1988");
// Declaration of a variable that use the class Person
$person1 = new Person("Karim","Lmchi",$birthday);
// Display of the Object on table
var_dump($person1); 

// change of birthday date
$person1->setBirthday("11","10","1989");
var_dump($person1);

?>