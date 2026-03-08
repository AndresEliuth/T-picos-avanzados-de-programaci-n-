<?php

// Guarda el tiempo exacto en el que inicia el programa
$inicio = microtime(true);

echo "<h3>Servidor atendiendo usuarios SECUENCIALMENTE</h3>";

// Ciclo que simula 5 usuarios que llegan al servidor
for($i=1; $i<=5; $i++){

    // Muestra que el servidor está atendiendo al usuario
    echo "Atendiendo usuario $i ...<br>";

    // Simula el tiempo que tarda el servidor en procesar la solicitud
    sleep(3);

    // Mensaje indicando que el usuario ya fue atendido
    echo "Usuario $i atendido<br><br>";

}

// Guarda el tiempo en que termina el programa
$fin = microtime(true);

// Calcula el tiempo total de ejecución
$tiempo = $fin - $inicio;

// Muestra el tiempo total redondeado a 2 decimales
echo "Tiempo total: ".round($tiempo,2)." segundos";

?>