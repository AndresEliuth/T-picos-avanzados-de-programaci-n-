<?php

class EmpleadoHelper {

    public static function validarCorreo($correo){
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    public static function formatearNombre($nombre){
        return strtoupper(trim($nombre));
    }

    public static function calcularAntiguedad($fecha){
        $inicio = new DateTime($fecha);
        $hoy = new DateTime();
        return $hoy->diff($inicio)->days;
    }

    public static function validarEdad($edad){
        return is_numeric($edad) && $edad >= 18 && $edad <= 99;
    }
}