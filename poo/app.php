<?php

include './lib/Entidad/Almacen.php';
include './lib/Entidad/Base.php';
include './lib/Forma/Base.php';
include './lib/Forma/Rectangulo.php';
include './lib/Forma/Cuadraro.php';
include './lib/Forma/Triangulo.php';


$almacenLima = new \Entidad\Almacen();
$almacenLima->setCiudad('Lima');
$almacenLima->setCapacidad(1000);
$almacenLima->setCarga(230);
$almacenLima->setEsDisponible();
var_dump($almacenLima);
var_dump($almacenLima-> calcularDisponibilidad());

//$className = 'Almacen';
//var_dump(new $className);

//$otroAlmacen = $almacenLima;
//$otroAlmacen->cerrarAlmacen();

$aunOtroAlmacen = clone $almacenLima;
$aunOtroAlmacen->cerrarAlmacen();

var_dump($almacenLima);

var_dump($almacenLima);

if ($almacenLima instanceof \Entidad\Almacen){
    echo '$almacenLima es de clase Almacen'.PHP_EOL;
}

$almacenMadrid = new $almacenLima;
$almacenMadrid->setCiudad('Madrid');

var_dump($almacenMadrid);
var_dump(new \Entidad\Base());
var_dump(new \Forma\Base());


$r = new \Forma\Rectangulo();
$r->setAncho(40);
$r->setLargo(70);
$almacenLima->setCapacidadFromRectangulo($r);
var_dump($almacenLima);

$r2 = new \Forma\Rectangulo();
$r2->setLargo(20);
$r2->setAncho(12);
var_dump($r2->calcularArea2x1());

$t1 = new \Forma\Triangulo();
var_dump($t1->getNombre());

$t1 = new \Forma\Rectangulo();
var_dump($t1->getNombre());

$t1 = new \Forma\Cuadrado();
var_dump($t1->getNombre());

