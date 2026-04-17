<?php
require_once "config.php";

$conexion= new mysqli($host, $user, $pass, $db);

if($conexion->connect_error){
    die("Error: " . $conexion->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS alumnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    carrera VARCHAR(100)
)";

if($conexion->query($sql)===TRUE){
    echo"Tabla creada / Ya existente";
} else{
    echo"Error: " . $conexion->error;
}
?>