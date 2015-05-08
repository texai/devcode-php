<?php
namespace Entidad;

class Manager{
    
    protected static $instancia;
    
    
    private function __construct() {}
    private function __clone() {}
    
    public static function getInstance(){
        if(is_null(self::$instancia)){
            self::$instancia = new self;
        }
        return self::$instancia;
    }
    
}
