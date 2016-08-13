<?php

include_once './conn.php';

if(!array_key_exists('id', $_GET) ){
    header('Location: /devcode/devcode-php/demodb/listar_cat.php');
}

$id = (int) $_GET['id'];
$query =  "SELECT * FROM categoria WHERE id=".$id;
$result = mysql_query($query);

if($result === false){
    echo "Hubo un error de datos: ";
    echo mysql_error();
    die();
}

$row = mysql_fetch_row($result);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Ver Categoría</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <b>Id: </b> <?=$row[0]?> <br />
            <b>Nombre: </b> <?=$row[1]?> <br />
            <b>Creado: </b> <?=$row[2]?> <br />
            <b>Activo: </b> <?=$row[3]?> <br />
        </div>
    </body>
</html>
