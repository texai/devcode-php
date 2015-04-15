<?php

class Alumno{

  protected $nombres;
  protected $apellidos;

  public function __construct($nombres, $apellidos){
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
  }

  public function nombreCompleto(){
    return $this->nombres . ' ' . $this->apellidos . PHP_EOL;
  }

}


$carlos = new Alumno('Carlos','Torres');

var_dump($carlos);
var_dump(new stdClass);
var_dump(is_object($carlos));
echo $carlos->nombreCompleto();

