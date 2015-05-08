<?php

include './lib/Entidad/Almacen.php';
include './lib/Entidad/Base.php';
include './lib/Entidad/Manager.php';
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


$r = new \Forma\Rectangulo(40, 70);
$almacenLima->setCapacidadFromRectangulo($r);
var_dump($almacenLima);

$r2 = new \Forma\Rectangulo(20, 12);
var_dump($r2->calcularArea2x1());

$t1 = new \Forma\Triangulo();
var_dump($t1->getNombre());

$t1 = new \Forma\Rectangulo();
var_dump($t1->getNombre());

$t1 = new \Forma\Cuadrado();
var_dump($t1->getNombre());

var_dump(\Forma\Rectangulo::getClassName());

$rc = clone $r2;

$i = \Entidad\Manager::getInstance();
$i2 = \Entidad\Manager::getInstance();
$i3 = \Entidad\Manager::getInstance();

var_dump($i);
var_dump(spl_object_hash($i));
var_dump(spl_object_hash($i2));
var_dump(spl_object_hash($i3));

var_dump(\Forma\Rectangulo::getCount());

$gc = new \Forma\Cuadrado(10);
$gr = new \Forma\Rectangulo(5, 10);
$gt = new \Forma\Triangulo(5);

var_dump('Area Cuadrado: '. $gc->calcularArea());
var_dump('Peri Cuadrado: '. $gc->calcularPerimetro());
var_dump('Area Rectangulo: '. $gr->calcularArea());
var_dump('Peri Rectangulo: '. $gr->calcularPerimetro());
var_dump('Area Triangulo: '. $gt->calcularArea());
var_dump('Peri Triangulo: '. $gt->calcularPerimetro());

