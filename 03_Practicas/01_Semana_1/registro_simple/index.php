<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 1</title>
</head>
<body>

<h1>Formulario de ejemplo</h1>

<form action="procesar.php" method="POST">

    <label>Nombre completo:</label>
    <input type="text" name="nombre" id="nombre">
    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo" id="correo">
    <br><br>

    <label>Número:</label>
    <input type="number" name="numero" id="numero>">
    <br><br>

    <label>Contraseña:</label>
    <input type="password" name="password" id="password">
    <br><br>

    <label>Verificacion:</label>
    <input type="password" name="password2" id="password2">
    <br><br>


    <button type="submit">Registrar</button>
    <button type="reset">Limpiar</button>

</form>


</body>
</html>