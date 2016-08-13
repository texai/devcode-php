<?php

mysql_connect('127.0.0.1',  'root', '');
mysql_select_db('larapp');


$query = sprintf("SELECT id, email FROM users 
    WHERE id<'%s' AND id>='%s'",
    mysql_real_escape_string(100),
    mysql_real_escape_string(1));


$result = mysql_query($query);


if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['id'];
    echo $row['email'];
    echo '<br>';
}

if($_GET['i']=="1"){
    mysql_query("INSERT INTO `larapp`.`users` (`name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES ('nnn', 'assa', 'dasdasd', NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');");
    
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
    
}