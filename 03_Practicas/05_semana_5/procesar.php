<?php
require_once "libreria/EmpleadoHelper.php";
require_once "config/Conexion.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = EmpleadoHelper::formatearNombre($_POST["nombre"]);
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
    $fecha = $_POST["fecha_ingreso"];
    $puesto = $_POST["puesto"];

    if(!EmpleadoHelper::validarCorreo($correo)){
        die("Correo inválido");
    }

    if(!EmpleadoHelper::validarEdad($edad)){
        die("Edad inválida");
    }

    $conexion = Conexion::conectar();

    $sql = "INSERT INTO empleados 
            (nombre, correo, edad, fecha_ingreso, puesto)
            VALUES (:nombre, :correo, :edad, :fecha, :puesto)";

    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":correo", $correo);
    $stmt->bindParam(":edad", $edad);
    $stmt->bindParam(":fecha", $fecha);
    $stmt->bindParam(":puesto", $puesto);

    $stmt->execute();

    echo "Empleado registrado correctamente <br>";
    echo "<a href='listar.php'>Ver empleados</a>";
}