<?php

$valores = ['Db','Files','Session'];
$seleccionado = $valores[rand(0,2)];
$varName = 'adaptador'.$seleccionado;

$adaptadorDb = ['base de datos',10];
$adaptadorFiles = ['archivos',20];
$adaptadorSession = ['sesiones',30];


var_dump($seleccionado);
var_dump($varName);
var_dump($$varName);