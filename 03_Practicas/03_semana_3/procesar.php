<?php
function validarAnimal($Animal) {
    return !empty($Animal);
}

function validarApp($app) {
    return !empty($app) ;
}

function validarEdad($edad) {
    return !empty($edad) && is_numeric($edad) && $edad >= 15 && $edad <= 99;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $animal    = $_POST['animal'];
    $app[]    = $_POST['app'];
    $edad      = $_POST['edad']; 

    $errores = [];

    if (!validarAnimal($animal)) {
        $errores[] = "No seleccionaste ningún animal";
    }

    if (!validarApp($app)) {
        $errores[] = "Selecciona por lo menos una app";
    }

    if (!validarEdad($edad)) {
        $errores[] = "Selecciona tu rango de edad";
    }

    if (empty($errores)) {
        echo "<p><strong>Animal Favorito: </strong> $animal</p><br>";
        echo "<p><strong>App usadas: </strong> $animal</p><br>";
        echo "<ul>";
        foreach ($_POST["apps"] as $app) {
            echo "<li>- $app </li>";
        }
        echo "<p><strong>Animal rango de edad: </strong> $edad</p><br>";

    } else {
        echo "<h3>Errores:</h3>";
        foreach ($errores as $error) {
            echo "- $error <br>";
        }
    }
}

?>