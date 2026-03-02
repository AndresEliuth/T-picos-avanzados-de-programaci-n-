<!DOCTYPE html>
<html>
<head>
    <title>Registro de Empleados</title>
</head>
<body>

<h2>Registro de Empleado</h2>

<form action="procesar.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Correo: <input type="email" name="correo" required><br>
    Edad: <input type="number" name="edad" required><br>
    Fecha Ingreso: <input type="date" name="fecha_ingreso" required><br>
    Puesto: <input type="text" name="puesto" required><br>
    <input type="submit" value="Guardar">
</form>

<a href="listar.php">Ver empleados</a>

</body>
</html>