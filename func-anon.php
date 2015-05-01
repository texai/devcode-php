<?php

$f1 = function(){
    return 'Funcion anónima 1'.PHP_EOL;
};
$r1 = $f1();
echo $r1;

$f2 = function($a){
    return 'Funcion anónima 2 ('.$a.')'.PHP_EOL;
};
echo $f2(99);

$f3 = function($a) use($r1) {
    return 'Funcion anónima 3 ('.$a.')'.PHP_EOL. $r1;
};
echo $f3(9999);

//var_dump();

