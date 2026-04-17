<?php
require_once "config.php";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

// RECIBIR DATOS DEL FORMULARIO
$nombre = $_POST['nombre'];
$carrera = $_POST['carrera'];

$sql = "INSERT INTO alumnos (nombre, carrera) VALUES ('$nombre', '$carrera')";

if ($conexion->query($sql) === TRUE) {
    echo "Alumno guardado correctamente <br><a href='index.html'>Regresar</a>";
} else {
    echo "Error: " . $conexion->error;
}
?>