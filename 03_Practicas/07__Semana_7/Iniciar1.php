<?php
// Ruta completa de PHP (MUY IMPORTANTE)
$php = "C:\\xampp\\php\\php.exe";

// Ejecuta tarea en segundo plano
pclose(popen("start /B $php tarea1.php", "r"));

// Marca como ejecutando
file_put_contents("estado_tarea1.txt", "ejecutando");

// Log
file_put_contents(
    "log.txt",
    date("Y-m-d H:i:s") . " - Tarea 1 iniciada\n",
    FILE_APPEND
);

header("Location: index.php");
?>