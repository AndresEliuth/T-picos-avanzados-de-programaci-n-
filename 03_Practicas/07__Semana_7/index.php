<?php
require_once "conexion.php";
$conexion = conectar();

/*
Obtenemos los logs automáticamente
Esto hará que la tabla se actualice sola
sin necesidad de ir a otra página
*/
$logs = $conexion->query("SELECT * FROM logs ORDER BY fecha DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control de Tareas</title>
</head>
<body>

<h2>CONTROL DE TAREAS</h2>

<!-- ===== TAREA 1 ===== -->
<h3>Tarea 1</h3>

<form action="iniciar.php" method="post" style="display:inline;">
    <input type="hidden" name="id" value="1">
    <button type="submit">Iniciar</button>
</form>

<form action="detener.php" method="post" style="display:inline;">
    <input type="hidden" name="id" value="1">
    <button type="submit">Detener</button>
</form>

<br><br>

<!-- ===== TAREA 2 ===== -->
<h3>Tarea 2</h3>

<form action="iniciar.php" method="post" style="display:inline;">
    <input type="hidden" name="id" value="2">
    <button type="submit">Iniciar</button>
</form>

<form action="detener.php" method="post" style="display:inline;">
    <input type="hidden" name="id" value="2">
    <button type="submit">Detener</button>
</form>

<br><br>

<h3>Limpieza </h3>
<form action="limpiar.php" method="post">
    <button type="submit">Limpiar registros</button>
</form>

<br><br>

<!-- ===== RESULTADOS AUTOMÁTICOS ===== -->
<h3>Registro de Actividad</h3>

<table border="1">
<tr>
    <th>Fecha</th>
    <th>Tarea</th>
    <th>Evento</th>
</tr>

<?php
/*
FOREACH:
Recorre todos los registros (logs)

$l representa cada fila
*/
foreach ($logs as $l):
?>
<tr>

    <!-- Fecha bonita -->
    <td>
        <?php echo date("d/m/Y H:i:s", strtotime($l['fecha'])); ?>
    </td>

    <!-- ID de tarea -->
    <td><?php echo $l['tarea_id']; ?></td>

    <!-- Evento -->
    <td><?php echo $l['evento']; ?></td>

</tr>
<?php endforeach; ?>

</table>

</body>
</html>