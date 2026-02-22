<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Regitro de empleados</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script defer src="js/validaciones.js"></script>
</head>
<body>
    <div class="container">
        <h2>Regitro de Libro</h2>

        <form id="fromEmpleados" action="procesar.php" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" id="nombre"> 

            <label>Correo Electronico:</label>
            <input type="text" name="correo" id="correo">

            <label>Edad:</label>
            <input type="text" name="edad" id="edad">

            <label>Fecha de ingreso:</label>
            <input type="date" name="fecha" id="fecha">

            <label>Puesto o area:</label>
            <input type="text" name="puesto" id="puesto">

            <input type="submit" value="Registrar Empleado">

            <p id="mensajeErrror" class="error"></p>
        </form>
    </div>
</body>
</html>