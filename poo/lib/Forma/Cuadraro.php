<?php

namespace Forma;

include_once dirname(__FILE__).'/AreaCalculable.php';
include_once dirname(__FILE__).'/PerimetroCalculable.php';

class Cuadrado extends Base 
    implements PerimetroCalculable,  AreaCalculable
{

    protected $nombre = 'Cuadr.';
    protected $lado;
    
    public function __construct($lado) {
        $this->lado = $lado;
    }
    
    public function calcularPerimetro() {
        return $this->lado * 4;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

}