<?php

include_once './conn.php';

if(array_key_exists('op', $_GET) && $_GET['op']=='activar' ){
    $id = $_GET['id'];
    // TODO: Evitar inyección SQL;
    $query = "UPDATE categoria SET activo=1 WHERE id=".$id;
    mysql_query($query);
    header('Location: /devcode/devcode-php/demodb/listar_cat.php');
}

if(array_key_exists('op', $_GET) && $_GET['op']=='desactivar' ){
    $id = $_GET['id'];
    // TODO: Evitar inyección SQL;
    $query = "UPDATE categoria SET activo=0 WHERE id=".$id;
    mysql_query($query);
    header('Location: /devcode/devcode-php/demodb/listar_cat.php');
}
if(array_key_exists('op', $_POST) && $_POST['op']=='editar' ){
    $id = $_POST['id'];
    $nombre = mysql_escape_string($_POST['nombre']);
    // TODO: Evitar inyección SQL;
    $query = "UPDATE categoria SET nombre='$nombre' WHERE id=".$id;
    mysql_query($query);
    header('Location: /devcode/devcode-php/demodb/listar_cat.php');
}

?>
<? if(array_key_exists('op', $_GET) && $_GET['op']=='editar' ) : ?>
    <?
    $id = (int) $_GET['id'];
    $query =  "SELECT * FROM categoria WHERE id=".$id;
    $result = mysql_query($query);
    if($result === false){
        echo "Hubo un error de datos: ".mysql_error();
        die();
    }
    $row = mysql_fetch_row($result);
    ?>
    <form action="/devcode/devcode-php/demodb/editar_cat.php" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre Categoría" value="<?=$row[1]?>" />
        <br />
        <input type="hidden" name="op" value="editar" />
        <input type="hidden" name="id" value="<?=$row[0]?>" />
        <input type="submit" value="Editar" />
    </form>
<? endif; ?>


