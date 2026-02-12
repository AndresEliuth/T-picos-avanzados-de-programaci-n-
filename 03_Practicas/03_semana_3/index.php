<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">

    <title>Formulario de preferencias personales</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validaciones.js"></script>
</head>

<body>
<h2>Formulario de preferencias personales</h2>

<form method="POST" action="procesar.php" onsubmit="return validarFormulario();">

    <p><strong>Selecciona tu animal favorito</strong><br>
    <input type="radio" name="animal" value="Gatos">Gatos<br>
    <input type="radio" name="animal" value="Perros">Perros<br>
    <input type="radio" name="animal" value="Conejos">Conejos<br>
    <input type="radio" name="animal" value="Aves">Aves<br>

    <p><strong>¿Qué plataformas de redes sociales utilizas? </strong><br>
    <input type="checkbox" name="app[]" value="Facebook">Facebook<br>
    <input type="checkbox" name="app[]" value="Tiktok">Tiktok<br>
    <input type="checkbox" name="app[]" value="Instragram">Instragram<br>
    <input type="checkbox" name="app[]" value="X">X<br>

    <p><strong>¿En que rango de edad te encuentras? </strong><br>
    <select name="edad" id="edad">
        <option value="">-- seleccione una opción--</option>
        <option value="infancia"> De 0 a 6 años</option>
        <option value="niñez"> De 7 a 12 años</option>
        <option value="adolescencia"> De 13 a 20 años</option>
        <option value="juventud"> De 21 a 25 años</option>
        <option value="adultez"> De 26 a 60 años</option>
        <option value="ancianidad"> 61 años en adelante</option>
    </select>
    <br>
    <button type="submit">Registrar</button>
</body>

</html>