<?php

$archivo = "recurso.txt";

// Abrir archivo en modo lectura/escritura
$fp = fopen($archivo, "r+");

// 🔒 BLOQUEO EXCLUSIVO (evita que otro proceso entre)
flock($fp, LOCK_EX);

// Leer saldo actual
$saldo = fread($fp, filesize($archivo));

// Registrar lectura en log
file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 (LOCK REAL) lee saldo: $saldo\n", FILE_APPEND);

// Simular proceso
sleep(2);

// Calcular nuevo saldo
$nuevo = $saldo - 500;

// Limpiar archivo antes de escribir
ftruncate($fp, 0);
rewind($fp);

// Escribir nuevo saldo
fwrite($fp, $nuevo);

// Registrar escritura en log
file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 (LOCK REAL) escribe saldo: $nuevo\n", FILE_APPEND);

// 🔓 Liberar bloqueo
flock($fp, LOCK_UN);

// Cerrar archivo
fclose($fp);

// Regresar a la página principal
header("Location: index.php");