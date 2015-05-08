<?php

namespace Forma;

include_once dirname(__FILE__).'/AreaCalculable.php';
include_once dirname(__FILE__).'/PerimetroCalculable.php';

// Equilatero
class Triangulo extends Base
    implements AreaCalculable, PerimetroCalculable
{

    protected $nombre = 'Triang.';
    protected $lado;

    public function __construct($lado = 0) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        $h = (pow(3,0.5) * $this->lado )/2;
        return ($h * $this->lado) / 2;
    }

    public function calcularPerimetro() {
        return $this->lado * 3;
    }

}