<?php
require_once "config.php";

$conexion = new mysqli($host, $user, $pass);

if ($conexion->connect_error){
    die("Error de conexión: " . $conexion->connect_error);
}

echo"Conexión al servidor exitosa";
?>