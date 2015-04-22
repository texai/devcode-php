<?php

namespace Admin\Model;

class Usuario {
    
    const TIPO_DOC_DNI = 'dni';
    const TIPO_DOC_PASAPORTE = 'pasaporte';
    const TIPO_DOC_CE = 'carnet-extranjeria';
    
    protected $tipoDoc;
    
    function getTipoDoc() {
        return $this->tipoDoc;
    }

    function setTipoDoc($tipoDoc) {
        $this->tipoDoc = $tipoDoc;
    }

}