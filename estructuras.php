<?php
$a = 4;

if($a > 3){
    echo '1 Se ejecuta si la expr es verdadera'.PHP_EOL;
}

if($a < 3){
    echo '2 Se ejecuta si la expr (...) es verdadera'.PHP_EOL;
}else{
    echo '3 Se ejecuta si la expr (...) es falsa'.PHP_EOL;
}

if($a < 3){
    echo '4 Se ejecuta si la expr (...) es verdadera'.PHP_EOL;
}elseif($a > 5){
    echo '5 Se ejecuta si la expr (...) es verdadera'.PHP_EOL;
}else{
    echo '6 Se ejecuta si la expr (...) es falsa'.PHP_EOL;
}

?>

    
<? if($a > 3): ?>
    7 Se ejecuta si la expr es verdadera
<? endif; ?>

    
<?php
$i = 0;
while($i<5){
    echo ++$i.' ';
}
echo PHP_EOL;
//while(true){
//    echo '.   /-';
//    sleep(1);
//}

$i = 12;
do{
    echo ++$i.' (do-while) ';
}while($i<5);
echo PHP_EOL;


for( $i=0 ; $i<5 ; $i++){
    echo $i.' (for) ';
}
echo PHP_EOL;

$i=0 ;
while($i<5){
    echo $i.' (while) ';
    $i++;
}
echo PHP_EOL;

$arr = [rand(1,100),rand(1,100),rand(1,100),rand(1,100)];

for($i=0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}
echo PHP_EOL;

$arr2 = [
    'L'=>rand(1,100).'x',
    'M'=>rand(1,100),
    'K'=>rand(1,100),
    'J'=>rand(1,100),
    'V'=>rand(1,100),
];
foreach($arr2 as $item){
    echo $item.' ';
}
echo PHP_EOL;


foreach(range(1,10) as $item){
    echo $item.' ';
    
    if($item=='7'){
        break;
    }
    if($item=='4'){
        continue;
    }
    
    echo ' ** ';
}
echo PHP_EOL;

$dia = 'K';

if($dia=='L'){
    echo 'Lunes';
}elseif($dia=='M'){
    echo 'Martes';
}elseif($dia=='K'){
    echo 'Miercoles';
}elseif($dia=='J'){
    echo 'Jueves';
}else{
    echo 'otro día';
}
echo PHP_EOL;

switch ($dia) {
    case 'L':
        echo 'Lunes';
        break;
    case 'M':
        echo 'Martes';
        break;
    case 'K':
        echo 'Miercoles';
        break;
    case 'J':
        echo 'Jueves';
        break;
    default:
        echo 'otro día';
        break;
}
echo PHP_EOL;

// return
function saludo($nombre) {
//    echo 'Hola '.$nombre.PHP_EOL;
    return 'Hola '.$nombre.PHP_EOL;
}
echo strtoupper(saludo('Julio'));


require_once './lib/Usuario.php';
require_once './lib/Usuario.php';
require_once './lib/Usuario.php';
include './lib/echo.php';
include './lib/echo.php';
include './lib/echo.php';

$u1 = new Usuario();
$u1->setTipoDoc(Usuario::TIPO_DOC_PASAPORTE);
echo $u1;