<?php
// Datos de entrada

$numArray = array(100, 3, 4, 5, 6, 7, 8, 9,16,18);
$numMajor=0;

foreach($numArray as $num){
  if ($num > $numMajor ){
      $numMajor = $num;  
   }
  }

  echo "El numero mayor del arreglo es: " . $numMajor;
?>