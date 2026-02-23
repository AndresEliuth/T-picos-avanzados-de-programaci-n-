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
        <h2>Regitro de Empleado</h2>

        <form id="formEmpleados" action="procesar.php" method="POST" onsubmit="return validarFormulario()">
            <label>Nombre:</label>
            <input type="text" name="nombre" id="nombre"> 

            <label>Correo Electronico:</label>
            <input type="text" name="correo" id="correo">

            <label>Edad:</label>
            <input type="text" name="edad" id="edad">

            <label>Fecha de ingreso:</label>
            <input type="date" name="fecha" id="fecha">

            <p><strong>A que area pertenece: </strong><br>
            <select name="area" id="area">
                <option value="">-- seleccione una opción--</option>
                <option value="direeccion">Dirección General</option>
                <option value="recursos">Recursos Humanos</option>
                <option value="finanzas">Finanzas y Contabilidad</option>
                <option value="produccion">Producción </option>
                <option value="ventas">Marketing y Ventas</option>
                <option value="sistemas">Sistemas</option>

            </select>
            <input type="submit" value="Registrar Empleado">
            
            <p id="mensajeErrror" class="error"></p>
        </form>
    </div>
</body>
</html>