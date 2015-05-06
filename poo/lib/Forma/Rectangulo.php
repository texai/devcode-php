<?php

namespace Forma;

class Rectangulo extends Base {
    
    protected $nombre = 'Rectan.';
    protected $ancho;
    protected $largo;
    
    public function calcularArea(){
        return $this->ancho * $this->largo;
    }
    
    public function calcularArea2x1(){
        $this->largoEsDobleQueAncho(2);
        return $this->calcularArea();
    }
    
    private function largoEsDobleQueAncho($n){
        $this->largo = $this->ancho * $n;
    }
    
    function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    function setLargo($largo) {
        $this->largo = $largo;
    }

    
    
}