<?php
$a = 2;
if ( $a==2 ){
    echo 'a es 2'.PHP_EOL;
}
if ( $a.'' === '2' ){
    echo 'a es 2 (mismo tipo)'.PHP_EOL;
}

/**
 * >
 * <
 * >=
 * <=
 * != diferente
 * <> diferente
 * !== 
 */

// @ operador para silenciar errores
@$c = $b;

// operador de ejecución
$salida = `ls -al`;
echo $salida.PHP_EOL.PHP_EOL;

$d = 5;

$d+=2; // sugar syntax
//  $d = $d + 2; --->   $d+=2;
//  $d+=1;       --->   $d++;

// (post/pre) (in/de)crementadores 
var_dump($d++,++$d,--$d,$d--,$d); // 7,9,8,8,7

// operadores lógicos
var_dump( (true AND FALSE) XOR (TRUE OR FALSE) );
var_dump( (true &&  FALSE) XOR (TRUE || FALSE) );

// operadores de cadenas
$a = '| ';
$a = $a . '-> ';
$a .= '=>>';
var_dump( '1' . 2 . '3' . $a );

class A {
    public $nombre;
    public function __construct($n){
        $this->nombre = $n;
    }
    public function __toString(){
        return "[[".$this->nombre."]]".PHP_EOL;
    }
}
$objA = new A('PHP');
//var_dump($objA);
echo $objA;
//var_dump( 4 . 5);echo PHP_EOL;


// operador de tipo: instanceof
foreach([$objA, new stdClass()] as $x){
    if ( $x instanceof A ) {
        echo 'es tipo A'.PHP_EOL;
    }else{
        echo 'es tipo '.  get_class($x).PHP_EOL;
    }
}

