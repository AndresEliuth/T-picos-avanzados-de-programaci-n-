<?php
// Función para conectar a la base de datos
function conectar() {
    try {
        // PDO = forma segura de conectarse a MySQL
        $conexion = new PDO("mysql:host=localhost;dbname=control_tareas", "root", "");

        // Esto hace que los errores se muestren (útil para desarrollo)
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;

    } catch (PDOException $e) {
        // Si falla la conexión, muestra el error
        die("Error de conexión: " . $e->getMessage());
    }
}
?>