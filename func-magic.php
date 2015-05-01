<?php

class Usuario {
    
    const TIPO_DOC_DNI = 'dni';
    const TIPO_DOC_PASAPORTE = 'pasaporte';
    const TIPO_DOC_CE = 'carnet-extranjeria';
    
    protected $tipoDoc;
    protected $pais;
    protected $idioma;
    
    public function __construct($tipoDoc = 'dni') {
        $this->setTipoDoc($tipoDoc);
        $this->pais = 'UK';
        $this->idioma = 'EN';
    }
    
    function getTipoDoc() {
        return $this->tipoDoc;
    }

    function setTipoDoc($tipoDoc) {
        $this->tipoDoc = $tipoDoc;
    }
    
    public function __toString(){
        return 'Este usuario usa '.$this->tipoDoc. PHP_EOL;
    }
    
    public function __invoke(){
        return __METHOD__.PHP_EOL;
    }

    public function __call($name, $arg){
        return __METHOD__ .
                ". Name: $name; Args:" .
                serialize($arg) .
                PHP_EOL;
    }

    public function __get($name){
        return __METHOD__." name:$name".PHP_EOL;
    }

    public function __set($name, $value){
        echo __METHOD__." name:$name; value: $value".PHP_EOL;
    }

    public function __isset($name){
        echo __METHOD__." name:$name".PHP_EOL;
    }

    public function __unset($name){
        echo __METHOD__." name:$name".PHP_EOL;
    }
    
    public function __sleep(){
        return ['pais','idioma'];
    }
    
    public function __wakeup(){
        echo __METHOD__.PHP_EOL;
    }

}

$u1 = new Usuario();
$u1->setTipoDoc(Usuario::TIPO_DOC_PASAPORTE);
echo $u1;
echo new Usuario;

echo $u1();
echo $u1->matricular('fisica','E123');

$x = $u1->apellido;
echo $x;

$u1->nombre = 'DevCode';

if(isset($u1->edad)){
    // ...
}

unset($u1->dob);

var_dump($u1);
$serialU1 = serialize($u1).PHP_EOL;
echo $serialU1;
$deserialU1 = unserialize($serialU1);
var_dump($deserialU1);