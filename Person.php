<?php
class Person {
public $name;
public $edad;
public $altura;
public $peso;

public function __construct($nameP, $edadP, $alturaP, $pesoP )
 {
  $this->name = $nameP;
  $this->edad = $edadP;
  $this->altura = $alturaP;
  $this->peso = $pesoP;

 }

Public function sayHi(){
  echo "Hola mi nombre es:" . $this->name . 
  "Mi edad es:" .$this->edad . 
  "Mi altura es:" . $this->altura . 
  "Mi peso es:" .$this->peso; 
}

}

?>