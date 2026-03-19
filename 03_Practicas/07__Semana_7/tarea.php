<?php
require_once "conexion.php";
$conexion = conectar();

$id = $argv[1];

// Duración dinámica
$limite = ($id == 1) ? 3 : 5;

// Función de log
function logMsg($conexion, $id, $msg) {
    $conexion->prepare("INSERT INTO logs (tarea_id, fecha, evento)
    VALUES (?, NOW(), ?)")
    ->execute([$id, $msg]);
}

logMsg($conexion, $id, "Tarea ejecutándose");

for ($i = 1; $i <= $limite; $i++) {

    sleep(2);

    logMsg($conexion, $id, "Paso $i");

    // Revisar estado
    $stmt = $conexion->prepare("SELECT estado FROM tareas WHERE id=?");
    $stmt->execute([$id]);
    $estado = $stmt->fetchColumn();

    if ($estado == "detenido") {
        logMsg($conexion, $id, "Tarea detenida manualmente");
        exit;
    }
}

logMsg($conexion, $id, "Tarea finalizada");

// Cambiar estado final
$conexion->prepare("UPDATE tareas SET estado='detenido' WHERE id=?")
         ->execute([$id]);
?>