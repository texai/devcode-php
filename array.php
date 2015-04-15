<?php


$array1 = array( -3, "devcode", 0.23 , 2  );
$array2 = [ -3, "devcode", 0.23 , 2 , '' ];

$array_asoc = [
  'nombre' => 'Juan',
  'edad' => '23',
  'ciudad' => 'Mexico DF',
  'x' => 'y',
];


$array2[13] = '.';
$array2[] = 55;

$array_asoc['profesion'] = 'DevCoder'; 
$array_asoc[] = 'un valor +'; 

$array_multid = [
    'ganador' => [
        'nombre' => 'Juan',
        'IP' => '200.20.20.13',
    ],
    'segundo_puesto' => [
        'nombre' => 'Lucho',
        'IP' => '200.20.50.23',
    ],
];


var_dump($array2);
var_dump($array_asoc);
var_dump($array_multid);
var_dump($array2[1]);
var_dump($array_multid['ganador']['IP']);
var_dump($array2{2});


function elementos_pares($arr){
  return array(2,6,8,12,18);
}

// a partir de php 5.4
var_dump(  elementos_pares($array2)[2]);

// asi se usaba en php 5.3
// teniamos que crear la variable temporal
$res = elementos_pares([]);
var_dump($res[2]);


foreach( $array2 as $i => $item ){
   echo '--> [[' . $i . ']]' . $item . ' <--' . PHP_EOL;
} 

$n = count($array2);
echo 'El array $array2 tiene ' . $n . ' elementos'.PHP_EOL;

var_dump(count($array_multid));





