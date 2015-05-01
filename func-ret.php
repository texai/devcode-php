<?php

function f1(){
    return 'se llamó a '.__FUNCTION__.PHP_EOL;
}

$x = f1();
echo $x;

function dividir($dividendo, $divisor){
    return [
        (int) floor($dividendo/$divisor),
        $dividendo % $divisor,
    ];
}


list($cociente, $residuo) = dividir(21,5);

var_dump($cociente, $residuo);