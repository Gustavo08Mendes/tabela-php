<?php

$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'usuarios';


$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

// Verifica a conexão
if (!$connection) {
    die("Erro na conexão: " . mysqli_connect_error());
}


?>