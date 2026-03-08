<?php

// Guarda el tiempo de inicio
$inicio = microtime(true);

echo "<h3>Servidor atendiendo usuarios SIMULTÁNEAMENTE</h3>";

// Ciclo que genera 5 usuarios
for($i=1; $i<=5; $i++){

    // Ejecuta el archivo usuario.php como un proceso independiente
    // $i se envía como parámetro (número de usuario)
    exec("php usuario.php $i > /dev/null &");

}

// Espera 4 segundos para permitir que los procesos terminen
sleep(4);

// Tiempo final
$fin = microtime(true);

// Calcula el tiempo total
$tiempo = $fin - $inicio;

echo "Todos los usuarios fueron enviados al servidor<br>";

echo "Tiempo aproximado: ".round($tiempo,2)." segundos";

?>