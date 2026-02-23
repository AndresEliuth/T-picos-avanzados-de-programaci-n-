<?php
require_once("funciones.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acceso no permitido");
}

$nombre = LimpiarTexto($_POST["nombre"]);
$correo = $_POST["correo"];
$edad   = $_POST["edad"];
$fecha  = $_POST["fecha"];
$area   = $_POST["area"];

if (!ValidarEdad($edad)) {
    die("Error: edad inválida.");
}

if (empty($area)) {
    die("Error: Área no seleccionada.");
}

if (strtotime($fecha) > time()) {
    die("Error: fecha inválida.");
}


if (!ValidarCorreo($correo)) {
    $estadoCorreo = "Inválido";
} else {
    $estadoCorreo = "Válido";
}

$empleado = [
    "nombre" => $nombre,
    "correo" => $correo,
    "edad"   => $edad,
    "fecha"  => $fecha,
    "area"   => $area,
    "estadoCorreo" => $estadoCorreo
];


$json = convertirAJSON($empleado);
$empleadoProcesado = convertirDesdeJSON($json);


$empleadoProcesado["antiguedad"] =
    CalcularAntiguedad($empleadoProcesado["fecha"]);

$empleados = [];
$empleados[] = $empleadoProcesado;

$totalRegistros = count($empleados);
$sumaEdades = 0;
$correosInvalidos = 0;

foreach ($empleados as $e) {
    $sumaEdades += $e["edad"];
    if ($e["estadoCorreo"] === "Inválido") {
        $correosInvalidos++;
    }
}

$promedioEdad = $sumaEdades / $totalRegistros;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">
    <h2>Reporte de empleado</h2>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Estado del correo</th>
            <th>Edad</th>
            <th>Días desde ingreso</th>
            <th>Área</th>
        </tr>

        <?php foreach ($empleados as $emp): ?>
        <tr>
            <td><?= $emp["nombre"]; ?></td>
            <td><?= $emp["estadoCorreo"]; ?></td>
            <td><?= $emp["edad"]; ?></td>
            <td><?= $emp["antiguedad"]; ?></td>
            <td><?= $emp["area"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Resumen</h3>
    <p>Total de registros: <?= $totalRegistros; ?></p>
    <p>Promedio de edad: <?= round($promedioEdad, 2); ?></p>
    <p>Correos inválidos detectados: <?= $correosInvalidos; ?></p>
</div>

</body>
</html>