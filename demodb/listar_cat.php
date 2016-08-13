<?php

include_once './conn.php';

$query = 'SELECT * FROM categoria;';
$result = mysql_query($query);

if($result === false){
    echo "Hubo un error de datos: ";
    echo mysql_error();
    die();
}

$n = mysql_num_rows($result);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lista Categoría</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            table tr.activo td{background-color: lightgreen;}
            table tr.inactivo td{background-color: lightcoral;}
        </style>
    </head>
    <body>
        <div>
            
            <? if($n>0): ?>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Creado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? while($row = mysql_fetch_assoc($result)) : ?>
                        <tr class="<?=($row['activo']?'activo':'inactivo')?>">
                            <td><?=$row['id']?></td>
                            <td><?=$row['nombre']?></td>
                            <td><?=$row['creado']?></td>
                            <td>
                                <a href="ver_cat.php?id=<?=$row['id']?>">Ver</a>
                                <a href="editar_cat.php?op=editar&id=<?=$row['id']?>">Editar</a>
                                <? if($row['activo']): ?>
                                    <a href="editar_cat.php?op=desactivar&id=<?=$row['id']?>">Desactivar</a>
                                <? else: ?>
                                    <a href="editar_cat.php?op=activar&id=<?=$row['id']?>">Activar</a>
                                <? endif; ?>
                            </td>
                        </tr>

                        <? endwhile; ?>
                    </tbody>
                </table>

            <? else: ?>
                Se encontraro <?=$n?> filas.<br />
            <? endif; ?>

            <a href="nueva_cat.php">Nueva Categoría</a>            
            
            
        </div>
    </body>
</html>


