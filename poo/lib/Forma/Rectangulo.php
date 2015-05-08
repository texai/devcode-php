<?php

namespace Forma;

include_once dirname(__FILE__).'/AreaCalculable.php';
include_once dirname(__FILE__).'/PerimetroCalculable.php';

class Rectangulo extends Base
    implements AreaCalculable, PerimetroCalculable
{
    
    protected $nombre = 'Rectan.';
    protected $ancho;
    protected $largo;
    protected static $count;
    
    public function __construct($ancho = 0, $largo = 0) {
        $this->ancho = $ancho;
        $this->largo = $largo;
        $this->_contador();
    }
    
    public function __clone() {
        $this->_contador();
    }
    
    protected function _contador() {
        if(is_null(self::$count)){
            self::$count = 1;
        }else{
            self::$count++;
        }
    }
    
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
    
    public static function getCount(){
        return self::$count;
    }


    public static function getClassName(){
        return __CLASS__;
    }

    public function calcularPerimetro() {
        return ($this->ancho + $this->largo)*2;
    }

}