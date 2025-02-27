<?php
$host = "localhost";  
$user = "root";      
$password = "";        
$conex = new mysqli($host, $user, $password);

if ($conex->connect_error) {
    die("Error en la conexión: " . $conex->connect_error);
}
?>