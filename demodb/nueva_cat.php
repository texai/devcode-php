<?php

include_once './conn.php';

if(array_key_exists('nombre', $_POST)){
    $query =  "INSERT INTO categoria (`nombre`, `creado`, `activo`) ";
    $query .= "VALUES ('{$_POST['nombre']}', '".date('Y-m-d H:i:s')."', '1');";
    mysql_query($query);
    header('Location: /devcode/devcode-php/demodb/listar_cat.php');
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Nueva Categoría</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre Categoría" />
                <br />
                <input type="submit" value="Agregar" />
            </form>
            
        </div>
    </body>
</html>
