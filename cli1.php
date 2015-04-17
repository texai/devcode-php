<?php

var_dump($argc);

var_dump($argv);


if ($argv[1]=='sumar'){
    echo $argv[2] + $argv[3];
}

if ($argv[1]=='restar'){
    echo $argv[2] - $argv[3];
}

if ($argv[1]=='mult'){
    echo $argv[2] * $argv[3];
}

if ($argv[1]=='div'){
    echo $argv[2] / $argv[3];
}



echo PHP_EOL;






