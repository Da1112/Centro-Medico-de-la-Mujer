<?php
$host = "localhost";  
$user = "root";      
$password = "123456";       
$dbname = "formulario";  
$conex = new mysqli($host, $user, $password, $dbname);

// Verificacion de la  conexi
if ($conex->connect_error) {
    die("Error en la conexión: " . $conex->connect_error);
}
?>