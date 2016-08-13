<?php
session_start();

if( !array_key_exists('carrito', $_SESSION)){
    $_SESSION['carrito'] = [];
}

if(array_key_exists('op', $_GET) && $_GET['op']=='agregar'){
    if(array_key_exists($_GET['id'], $_SESSION['carrito'])){
        $_SESSION['carrito'][$_GET['id']]++;
    }else{
        $_SESSION['carrito'][$_GET['id']] = 1;
    }
    header('Location: /devcode/devcode-php/carrito.php');
}

if(array_key_exists('op', $_GET) && $_GET['op']=='borrar'){
    if(array_key_exists($_GET['id'], $_SESSION['carrito'])){
        unset($_SESSION['carrito'][$_GET['id']]);
    }
    header('Location: /devcode/devcode-php/carrito.php');
}

if(array_key_exists('op', $_GET) && $_GET['op']=='decr'){
    if(array_key_exists($_GET['id'], $_SESSION['carrito'])){
        $_SESSION['carrito'][$_GET['id']]--;
        if($_SESSION['carrito'][$_GET['id']]==0){
            unset($_SESSION['carrito'][$_GET['id']]);
        }
    }
    header('Location: /devcode/devcode-php/carrito.php');
}

if(array_key_exists('op', $_GET) && $_GET['op']=='eliminar'){
    $_SESSION['carrito'] = [];
    header('Location: /devcode/devcode-php/carrito.php');
}

$productos = [
    1 => ['nombre' => 'Tele 32" LG','precio' => 1500.00,],
    2 => ['nombre' => 'Galaxy S8','precio' => 5432.00,],
    3 => ['nombre' => 'Laptop Dell','precio' => 3500.00,],
    4 => ['nombre' => 'Tablet Lenovo','precio' => 500.00,],
];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Tienda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <h2>Productos</h2>
            <ul>
                <? foreach($productos as $id => $prodcto): ?>
                <li>
                    <?=$prodcto['nombre']?> <br />
                    S/. <?=$prodcto['precio']?>
                    <a href="/devcode/devcode-php/carrito.php?op=agregar&id=<?=$id?>">Agregar al Carrito</a>
                </li>
                <? endforeach; ?>
            </ul>
            <h2>Carrito</h2>
            <? $total = 0; ?>
            <ul>
                <? foreach($_SESSION['carrito'] as $id => $n): ?>
                <li>
                    <?=$productos[$id]['nombre']?> <br />
                    Precio x Unidad: S/. <?=$productos[$id]['precio']?> <br />
                    Cantidad:  <?=$n?> items <br />
                    <? $precio = $productos[$id]['precio']*$n; ?>
                    <? $total+=$precio; ?>
                    Precio: S/. <?=$precio?>
                    <a href="/devcode/devcode-php/carrito.php?op=borrar&id=<?=$id?>">Borrar del Carrito</a>
                    <a href="/devcode/devcode-php/carrito.php?op=decr&id=<?=$id?>">Quitar 1 del Carrito</a>
                </li>
                <? endforeach; ?>
            </ul>
            Total: S/. <?=$total?> <br />
            <a href="/devcode/devcode-php/carrito.php?op=eliminar&id=<?=$id?>">Eliminar Carrito</a>
        </div>
        <? var_dump($_SESSION) ?>
    </body>
</html>
