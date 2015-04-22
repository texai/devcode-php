<?php

// precedencia
echo 3 + 4 * 5; // 23
echo PHP_EOL;
echo (3 + 4) * 5; //35
echo PHP_EOL;
echo 3 + (4 * 5); // 23
echo PHP_EOL;
echo 3 * 3 % 5;  // 4 o 9
echo PHP_EOL;
echo PHP_EOL;

// aritmeticos
$a = 3 + 1;
echo 17 % 5 . PHP_EOL; // 2

// asignacion
echo ($a = 3 + 1) . PHP_EOL;
$b = $c = $d = 7;
$b = ($c = ($d = 7));
var_dump([$b,$c,$d]);
$e = ($f = 4) + 3;
var_dump([$e,$f]);
$g = 3; // 3
$h = &$g; // ? referencia
$i = $g; // 3
$g = 8; // 8
echo $g.PHP_EOL; // 8
echo $h.PHP_EOL; // 8
echo $i.PHP_EOL; // 3

// bitwise

$a = 0b0101;
$b = 0b1100;
// ---------
//   0b1101 OR -> |
//   0b0100 AND -> &
//   0b1001 XOR -> &
//   0b1010 -a -> ~
echo decbin($a & $b).PHP_EOL;
echo decbin($a | $b).PHP_EOL;
echo decbin(~$a).PHP_EOL;
echo ($a<<4).PHP_EOL;
echo ($b>>2).PHP_EOL;

       //128
        //64
         //32
          //16
           //8
            //4
             //2
              //1
$a = 0b01010000;
     
echo (E_ALL & ~E_DEPRECATED & ~E_STRICT) . PHP_EOL;
echo decbin(E_ALL & ~E_DEPRECATED & ~E_STRICT) . PHP_EOL ;

echo 'E_ALL: ' . E_ALL . ' bin:       '.decbin(E_ALL). PHP_EOL;
echo 'E_DEPRECATED: ' . E_DEPRECATED . ' bin:  '.decbin(E_DEPRECATED). PHP_EOL;
echo 'E_STRICT: ' . E_STRICT . ' bin:        '.decbin(E_STRICT). PHP_EOL;
echo 'E_NOTICE: ' . E_NOTICE . ' bin:                   '.decbin(E_NOTICE). PHP_EOL;
echo 'E_COMPILE_ERROR: ' . E_COMPILE_ERROR . ' bin:        '.decbin(E_COMPILE_ERROR). PHP_EOL;
echo 'E_WARNING: ' . E_WARNING . ' bin:                    '.decbin(E_WARNING). PHP_EOL;
echo 'E_PARSE: ' . E_PARSE . ' bin:                     '.decbin(E_PARSE). PHP_EOL;

echo decbin( (~E_ALL) | E_WARNING | E_PARSE | E_NOTICE) . PHP_EOL ;
echo decbin( ~( E_ALL ^ (E_WARNING | E_PARSE | E_NOTICE) ) ) . PHP_EOL ;


define('MASK',         0b11111);
define('ES_ALUMNO',        0b1);
define('ES_MAYORDEEDAD',  0b10);
define('ES_REPITENTE',   0b100);
define('ES_EXTRANJERO', 0b1000);
define('ES_JUDIO',     0b10000);


$cat = ES_ALUMNO | ES_MAYORDEEDAD | ES_EXTRANJERO | ES_JUDIO;
//$cat = ~MASK | ES_ALUMNO | ES_MAYORDEEDAD | ~ES_REPITENTE | ~ES_EXTRANJERO ;
echo '===alumno==='.PHP_EOL;
echo decbin($cat).PHP_EOL;



