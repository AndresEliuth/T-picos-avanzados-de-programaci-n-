<?php
    require_once "config/Conexion.php";
    require_once "libreria/EmpleadoHelper.php";

    $conexion = Conexion::conectar();

    $sql = "SELECT * FROM empleados";
    $stmt = $conexion->query($sql);
    $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $total = count($empleados);
    $sumaEdades = 0;
    $mayorAntiguedad = 0;
    $empleadoMayor = "";

    foreach($empleados as $emp){
        $sumaEdades += $emp["edad"];
        $antiguedad = EmpleadoHelper::calcularAntiguedad($emp["fecha_ingreso"]);

        if($antiguedad > $mayorAntiguedad){
            $mayorAntiguedad = $antiguedad;
            $empleadoMayor = $emp["nombre"];
        }
    }

    $promedio = $total > 0 ? $sumaEdades / $total : 0;
    ?>

    <h2>Lista de Empleados</h2>

    <table border="1">
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Edad</th>
        <th>Fecha Ingreso</th>
        <th>Puesto</th>
    </tr>

    <?php foreach($empleados as $emp): ?>
    <tr>
        <td><?= htmlspecialchars($emp["nombre"]) ?></td>
        <td><?= htmlspecialchars($emp["correo"]) ?></td>
        <td><?= $emp["edad"] ?></td>
        <td><?= $emp["fecha_ingreso"] ?></td>
        <td><?= htmlspecialchars($emp["puesto"]) ?></td>
    </tr>
    <?php endforeach; ?>
    </table>

    <h3>Estadísticas</h3>
    Total empleados: <?= $total ?><br>
    Promedio edad: <?= round($promedio,2) ?><br>
    Empleado con mayor antigüedad: <?= $empleadoMayor ?> (<?= $mayorAntiguedad ?> días)
