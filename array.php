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


// Operadores

var_dump( [ 10 , 20 , 6=>30 ] + [ 4=>40 , 1=>50 , 6=>60]  );


var_dump( [] == [] );  // true
var_dump( [1,2,3] == [1,2,3,4] ); // false
var_dump( [1,2,3] == [3,1,2] ); // false
var_dump( [1,2,3] == [1,"2",3] ); // true
var_dump( [1,2,3] === [1,"2",3] ); //false



// funciones

var_dump(implode(' - ', ['Lunes','Miercoles','Viernes']));
var_dump(explode(',', '1,1,2,3,5,8,13'));
var_dump(is_array(0));
var_dump(is_array([]));
var_dump(is_array(array(6,3,2)));
var_dump(is_array(''));
var_dump(is_array([[[[[[]]]]]]));

$arr1 = [1=>'Lunes', 3=>'Miercoles', 5=>'Viernes'];

var_dump(array_values($arr1) );
var_dump(array_keys($arr1) );


var_dump(array_key_exists(6, $arr1) );
var_dump(array_key_exists(5, $arr1) );
var_dump( array_combine ( [ 10 , 20 , 30 ] , [ 40 , 50 , 60] ) );
var_dump(array_count_values ( [ 10 , 30, 10, 10, 20, 20, 10 ] ) );
var_dump(array_fill(3, 5, 'PHP') );
var_dump(array_flip($arr1));
var_dump(array_intersect ( [ 10 , 20 , 30 ] , [ 40 , 30 , 20] ) );
var_dump(array_merge ( [ 10 , 20=>20 , 30 ] , [ 40 , 1=>30 , 20] ) );

var_dump(array_pad(['A','B','C'],7,'X') );

$letras = ['A','B','C','D','E'];
$valor_aleatorio = array_rand($letras);
var_dump($valor_aleatorio);
var_dump($letras[$valor_aleatorio]);

var_dump(array_slice($letras, 1, 3, TRUE));
var_dump(array_unique ( [ 10 , 30, 10, 10, 20, 20, 10 ] ) );

var_dump(range(1,5));