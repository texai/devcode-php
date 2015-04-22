<?php

namespace Admin\Model;

class Constante {
    
    const URL_WS_USUARIOS = 'http://api.myapp.com/v1/usuario';
    
    function x() {
        $u = new \Admin\Model\Usuario();
        $u->setTipoDoc(\Admin\Model\Usuario::TIPO_DOC_PASAPORTE);
    }

    
    function y() {
        $u = new \Admin\Model\Usuario();
        $u->setTipoDoc(\Admin\Model\Usuario::TIPO_DOC_PASAPORTE);
        
        
        $cliente = new \Zend\Http\Client(self::URL_WS_USUARIOS);
        
    }


}