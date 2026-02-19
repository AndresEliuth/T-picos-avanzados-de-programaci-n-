<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Regitro de Libros</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script defer src="js/validaciones.js"></script>
</head>
<body>
    <div class="container">
        <h2>Regitro de Libro</h2>

        <form id="fromLibro" action="procesar.php" method="POST">
            <label>Titulo:</label>
            <input type="text" name="titulo" id="titulo"> 

            <label>Autor:</label>
            <input type="text" name="autor" id="autor">

            <label>Precio:</label>
            <input type="text" name="precio" id="precio">

            <label>Fecha:</label>
            <input type="date" name="fecha" id="fecha">

            <input type="submit" value="Registrar Libro">

            <p id="mensajeErrror" class="error"></p>
        </form>
    </div>
</body>
</html>