<?php
require_once "config.php";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$sql = "SELECT * FROM alumnos";
$resultado = $conexion->query($sql);

echo "<h2>Lista de Alumnos</h2>";
echo "<table border='1' style='margin:auto; text-align:center'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Carrera</th></tr>";

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila["id"]."</td>";
        echo "<td>".$fila["nombre"]."</td>";
        echo "<td>".$fila["carrera"]."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No hay registros</td></tr>";
}

echo "</table>";
echo "<br><a href='index.html'>Regresar</a>";
?>