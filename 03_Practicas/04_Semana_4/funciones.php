<?php

function LimpiarTexto($texto){
    return ucfirst(strtolower(trim($texto)));
}

function ValidarCorreo($correo){
    return !empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL);
}

function validarEdad($edad) {
    return !empty($edad) && is_numeric($edad) && $edad >= 15 && $edad <= 99;
}

function CalcularAntiguedad($fecha){
    $fechaDeIngreso=strtotime($fecha);
    $diferencia=time()-$fechaDeIngreso;
    return floor($diferencia/(60*60*24));
}

function ValidarPuesto($puesto){
    return !empty($puesto);

}

function convertirAJSON ($datos){
    return json_encode($datos, JSON_PRETTY_PRINT);
}

function convertirDesdeJSON ($json) {
    return json_decode($json, true);
}

function validarArea($area) {
    return !empty($area);
}