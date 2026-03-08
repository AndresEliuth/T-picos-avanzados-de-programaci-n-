<?php

// Recibe el número de usuario enviado desde multiple.php
$usuario = $argv[1];

// Muestra en consola que el usuario está siendo atendido
echo "Usuario $usuario está siendo atendido\n";

// Simula el tiempo que tarda el servidor
sleep(3);

// Guarda el resultado en un archivo de registro
file_put_contents(
    "registro.txt", // archivo donde se guarda
    "Usuario $usuario atendido\n", // texto que se guarda
    FILE_APPEND // agrega el texto sin borrar lo anterior
);

?>