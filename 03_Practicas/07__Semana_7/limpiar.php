<?php
require_once "conexion.php";
$conexion = conectar();

/*
DELETE FROM logs:
Borra TODOS los registros de la tabla logs
*/
$conexion->query("DELETE FROM logs");

/*
Regresamos al index automáticamente
*/
header("Location: index.php");
?>