<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica MySQLi</title>

</head>
<body>

    <h1>Gestión de Alumnos</h1>

    <div class="container">

        <!-- FORMULARIO -->
        <h3>Agregar Alumno</h3>
        <form action="insertar.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="carrera" placeholder="Carrera" required>
            <br>
            <button type="submit">Guardar</button>
        </form>

        <!-- BOTONES -->
        <div class="acciones">
            <form action="conexion.php" method="post">
                <button type="submit">Conectar</button>
            </form>

            <form action="crear_db.php" method="post">
                <button type="submit">Crear BD</button>
            </form>

            <form action="crear_tabla.php" method="post">
                <button type="submit">Crear Tabla</button>
            </form>

            <form action="mostrar.php" method="post">
                <button type="submit">Ver Alumnos</button>
            </form>
        </div>

    </div>

</body>
</html>