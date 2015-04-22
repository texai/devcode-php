<?php

namespace Test;

define('URL_WS_USUARIOS', 'http...');

//$URL_WS_USUARIOS = 'dfdsf';

//unset(URL_WS_USUARIOS);

//if(PHP_SAPI!=='cli'){
//    die('Sólo ejecutar desde linea de comando');
//}

echo URL_WS_USUARIOS.PHP_EOL;


echo 'Line:'.__LINE__.PHP_EOL;
echo 'File:'.__FILE__.PHP_EOL;
echo 'Dir:'.__DIR__.PHP_EOL;


Class TestConst {
    public function myfunc(){
        echo '__CLASS__:'.__CLASS__.PHP_EOL;
        echo '__METHOD__:'.__METHOD__.PHP_EOL;
        echo '__FUNCTION__:'.__FUNCTION__.PHP_EOL;
        echo '__NAMESPACE__:'.__NAMESPACE__.PHP_EOL;
    }
}

$tc = new TestConst();
$tc->myfunc();


echo 'PHP_VERSION:'.PHP_VERSION.PHP_EOL;
echo 'PHP_BINARY:'.PHP_BINARY.PHP_EOL;
echo 'PHP_EXTENSION_DIR:'.PHP_EXTENSION_DIR.PHP_EOL;
echo 'PHP_OS:'.PHP_OS.PHP_EOL;
echo 'PHP_SAPI:'.PHP_SAPI.PHP_EOL;

