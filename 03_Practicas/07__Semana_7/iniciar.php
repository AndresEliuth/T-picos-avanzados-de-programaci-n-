<?php
require_once "conexion.php";
$conexion = conectar();

$id = $_POST['id'];

// Ejecutar tarea
$php = "C:\\xampp\\php\\php.exe";
pclose(popen("start /B $php tarea.php $id", "r"));

// Cambiar estado
$conexion->prepare("UPDATE tareas SET estado='ejecutando' WHERE id=?")
         ->execute([$id]);

// Log
$conexion->prepare("INSERT INTO logs (tarea_id, fecha, evento)
VALUES (?, NOW(), 'Tarea iniciada')")
->execute([$id]);

header("Location: index.php");
?>