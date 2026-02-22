<?php 
require_once("funciones.php");

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    die("Acceso no permitido");
}

$nombre=LimpiarTexto($_POST["nombre"]);
$correo=$_POST["correo"];
$edad=$_POST["edad"];
$fecha=$_POST["fecha"];
$area=$_POST["area"];

if (!validarCorreo($correo)){
    die ("Error: correo invalido.");
}

if (!validarEdad($edad)){
    die ("Error: edad invalida.");
}

if (!validarArea($area)){
    die ("Error: Area No seleccionada.");
}

if(strtotime($fecha)>time()){
    die("Error: fecha invalida");
}

$empleado=[
    "nombre"=>$nombre,
    "correo"=>$correo,
    "edad"=>$edad,
    "fecha"=>$fecha,
    "area"=>$area  
];

$json=convertirAJSON($empleado);
$EmpleadoProcesado=convertirDesdeJSON($json);

$EmpleadoProcesado["antiguedad"]=CalcularAntiguedad($empleadoProcesado[""]);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    

</body>
</html>
