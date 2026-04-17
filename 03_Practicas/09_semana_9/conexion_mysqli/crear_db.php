<?php
require_once "conexion.php";

$sql= "CREATE DATABASE IF NOT EXISTS $db";

if($conexion->query($sql)===TRUE){
    echo"Base de datos creada / Ya existente";
} else {
    echo"Error: " . $conexion->error;
}