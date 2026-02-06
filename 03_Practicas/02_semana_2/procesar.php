<?php
function validarNombre($nombre) {
    return !empty($nombre) && strlen($nombre) >= 3;
}

function validarCorreo($correo) {
    return !empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL);
}

function validarEdad($edad) {
    return !empty($edad) && is_numeric($edad) && $edad >= 15 && $edad <= 99;
}

function validarPassword($password) {
    return !empty($password) && strlen($password) >= 6;
}

function confirmarPassword($password, $password2) {
    return $password === $password2;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre    = $_POST['nombre'];
    $correo    = $_POST['correo'];
    $edad      = $_POST['numero']; 
    $password  = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = [];

    if (!validarNombre($nombre)) {
        $errores[] = "El nombre es obligatorio y debe tener al menos 3 caracteres";
    }

    if (!validarCorreo($correo)) {
        $errores[] = "El correo es obligatorio y debe ser válido(osea *****@****.com";
    }

    if (!validarEdad($edad)) {
        $errores[] = "La edad debe ser un número entre 15 y 99";
    }

    if (!validarPassword($password)) {
        $errores[] = "La contraseña debe tener al menos 6 caracteres";
    }

    if (!confirmarPassword($password, $password2)) {
        $errores[] = "Las contraseñas no coinciden";
    }

    if (empty($errores)) {
        echo "Tu datos fueron capturados con exito :D";
    } else {
        echo "<h3>Errores:</h3>";
        foreach ($errores as $error) {
            echo "- $error <br>";
        }
    }
}


?>