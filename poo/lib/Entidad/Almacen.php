<?php

namespace Entidad;

use Categoria\Rectangulo;
use Forma\Rectangulo as FRect;

class Almacen{
    
    // atributos / propiedades
    protected $ciudad;
    protected $capacidad;
    protected $carga;
    protected $esDisponible;
    
    public function cerrarAlmacen(){
        $this->esDisponible = false;
    }

    public function calcularDisponibilidad(){
        return $this->capacidad - $this->carga;
    }
    
    function setCapacidadFromRectangulo(FRect $rectangulo){
        $this->capacidad = $rectangulo->calcularArea() + 2;
        
    }
    
    
    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }
    
    function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;
    }

    function setCarga($carga) {
        $this->carga = $carga;
    }

    function setEsDisponible($esDisponible = true) {
        $this->esDisponible = $esDisponible;
    }


    
}
