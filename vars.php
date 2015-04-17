<?php

if($_POST['edad']!=''){
    echo "La edad es: ". $_POST['edad'];
    exit;
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>TODO supply a title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div>
            <form action="vars.php" method="POST">
                <input name="edad"  />
                <input name="nombre"  />
                <input type="submit"  />
            </form>
        </div>
    </body>
</html>


<?php

$abc = 3;

//var_dump($ABC);


//echo 'http://localhost/devcode/devcode-php/vars.php?var1=abc&var2=php&lista[]=a&lista[]=b&alumno[nombre]=ernesto&alumno[apellido]=anaya';
//var_dump($_GET);


//var_dump($_POST);

session_start();

if(!is_array($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = [];
}

if(count($_SESSION['usuarios'])>=5){
    $_SESSION['usuarios'] = [];
}

$_SESSION['usuarios'][] = md5(rand(1,1000));



var_dump($_SESSION);
