<?php
// Función para obtener el estado de cada tarea
function obtenerEstado($archivo) {
    if (file_exists($archivo)) {
        return trim(file_get_contents($archivo));
    }
    return "detenido";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control de Tareas</title>
</head>

<body>

<h2>CONTROL DE TAREAS DEL SISTEMA</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Tarea</th>
        <th>Descripción</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>

    <!-- TAREA 1 -->
    <tr>
        <td>1</td>
        <td>Generar reporte</td>
        <td><?php echo obtenerEstado("estado_tarea1.txt"); ?></td>
        <td>

            <!-- BOTÓN INICIAR -->
            <form action="iniciar1.php" method="post" style="display:inline;">
                <button type="submit">Iniciar</button>
            </form>

            <!-- BOTÓN DETENER -->
            <form action="detener.php" method="post" style="display:inline;">
                <input type="hidden" name="tarea" value="1">
                <button type="submit">Detener</button>
            </form>

        </td>
    </tr>

    <!-- TAREA 2 -->
    <tr>
        <td>2</td>
        <td>Procesar lote</td>
        <td><?php echo obtenerEstado("estado_tarea2.txt"); ?></td>
        <td>

            <form action="iniciar2.php" method="post" style="display:inline;">
                <button type="submit">Iniciar</button>
            </form>

            <form action="detener.php" method="post" style="display:inline;">
                <input type="hidden" name="tarea" value="2">
                <button type="submit">Detener</button>
            </form>

        </td>
    </tr>
</table>

<br>

<h3>REGISTRO DE ACTIVIDAD</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Fecha y Hora</th>
        <th>Evento</th>
    </tr>

    <?php
    if (file_exists("log.txt")) {
        $lineas = file("log.txt");

        foreach ($lineas as $linea) {
            $partes = explode(" - ", $linea, 2);

            echo "<tr>";
            echo "<td>" . $partes[0] . "</td>";
            echo "<td>" . $partes[1] . "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>