<?php

function f1($a){
    echo 'se llamó a '.__FUNCTION__."($a)".PHP_EOL;
}
function f2($a,$b, $n){
    echo 'se llamó a '.__FUNCTION__."($a,$b,$n)".PHP_EOL;
}

f1('x');
f2('x','x2','x3');




function aumentar(&$cadena){
    $cadena = $cadena . ' texto EXTRA';
}
$titulo = 'Clase PHP ';
aumentar($titulo);
aumentar($titulo);
echo $titulo.PHP_EOL;

function aumentar_no_ref($cadena){
    return $cadena . ' texto EXTRA NR ';
}
$titulo = 'Clase 2 PHP ';
$titulo = aumentar_no_ref($titulo);
$titulo = aumentar_no_ref($titulo);
echo $titulo.PHP_EOL;




function f3($a = 'palabra'){
    echo 'se llamó a '.__FUNCTION__."($a)".PHP_EOL;
}
f3();

function f4($x, $a = 'palabra',$b = 'otra'){
    echo 'se llamó a '.__FUNCTION__."($x,$a,$b)".PHP_EOL;
}
f4('3');


class Alumno{}
class AlumnoPrimaria extends Alumno{}

// type Hinting
function f5(Alumno $q){
    echo 'se llamó a '.__FUNCTION__.'(['. get_class($q).'])'.PHP_EOL;
}

f5(new Alumno());
f5(new AlumnoPrimaria());


interface Profesor{public function ensenar();}
class Docente implements Profesor{
    public function ensenar(){}
}
function f6(Profesor $q){
    echo 'se llamó a '.__FUNCTION__.'(['. get_class($q).'])'.PHP_EOL;
}

f6(new Docente());

