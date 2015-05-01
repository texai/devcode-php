<?php

f2();
//f5();
f4();
f5();
//f3();

function f1(){
    echo 'se llamó a '.__FUNCTION__.PHP_EOL;
}
function f2(){
    echo 'se llamó a '.__FUNCTION__.PHP_EOL;
}

if(true){
    function f3(){
        echo 'se llamó a '.__FUNCTION__.PHP_EOL;
    }
}

function f4(){
    echo 'se llamó a '.__FUNCTION__.PHP_EOL;
    function f5(){
        echo 'se llamó a '.__FUNCTION__.PHP_EOL;
    }
    f5();
}

function tri($c, $n){
    if ($n<1){
        return;
    }else{
        echo str_repeat($c, $n).PHP_EOL;
        tri($c, --$n);
    }
    
}


f1();
f3();

tri('#',13);