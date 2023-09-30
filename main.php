<?php
include "./Person.php";

$personOne = new Person("Francia", 20, 1.50, 68);
$personTwo = new Person("Johana", 30, 1.60, 57);
$personThree = new Person("David", 11, 1.30, 35);

//$personOne-> name = "Francia";
//$personOne-> edad = 20;
//$personOne-> altura =1.50;

echo $personOne->name . "\n";
echo $personOne->edad . "\n";
echo $personOne->altura . "\n";
echo $personOne->peso . "\n";

echo $personTwo->name . "\n";
echo $personTwo->edad . "\n";
echo $personTwo->altura . "\n";
echo $personTwo->peso . "\n";

echo $personThree->name ."\n"; 
echo $personThree->edad ."\n";
echo $personThree->altura ."\n";
echo $personThree ->peso . "\n";


$personOne->sayHi();
$personTwo->sayHi();
$personThree->sayHi();

?>