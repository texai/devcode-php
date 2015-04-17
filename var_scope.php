<?php

// SCOPE - ámbito


$id = 123;

function mifun($nombre){
    global $id;
    return $nombre.$id;
}

//echo mifun('PHP').PHP_EOL;

$c = 5;
$sumar = function($a,$b) use ($c) {
    return $a + $b + $c;
};


echo $sumar(1,3);
echo PHP_EOL;


class Alumno{

  protected $nombres;
  protected $apellidos;

  public function __construct($nombres, $apellidos){
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
  }

  public function nombreCompleto(){
    $var2 = '';
    return $this->nombres . ' ' . $this->apellidos . PHP_EOL;
  }
  
  public function __toString(){
      return $var2;
  }

}
