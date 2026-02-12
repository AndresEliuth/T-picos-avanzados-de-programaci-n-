<?php
function validarAnimal($animal) {
    return !empty($animal);
}

function validarApp($app) {
    return !empty($app)&& is_array($app) ;
}

function validarEdad($edad) {
    return !empty($edad) ;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $animal    = $_POST['animal'];
    $app    = $_POST['app'] ?? [];
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
        echo "<p><strong>Animal Favorito: </strong> $animal</p>";
        echo "<p><strong>Apps usadas: </strong></p>";
        echo "<ul>";
        foreach ($app as $unaapp) {
            echo "<li> $unaapp </li>";
        }
        echo "</ul>";
        echo "<p><strong>Rango de edad: </strong> $edad</p><br>";

    } else {
        echo "<h3>Errores:</h3>";
        foreach ($errores as $error) {
            echo "- $error <br>";
        }
    }
}

?>