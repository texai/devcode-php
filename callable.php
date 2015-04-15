<?php

$soloPares = function($n){
  return ($n % 2) == 0 ;
};


$arr3 = [7,13,17,21,12,8,3];

$res = array_map( $soloPares, $arr3 );

var_dump($soloPares);

var_dump($res);

var_dump(array_map( function($n){
  return pow(2,$n);
} , [0,1,2,3,4,5,6,7,8,9,10] ));

