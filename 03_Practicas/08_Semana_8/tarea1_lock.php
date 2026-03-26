<?php

$archivo = "recurso.txt";
$fp = fopen($archivo, "r+");

// BLOQUEO REAL
flock($fp, LOCK_EX);

$saldo = fread($fp, filesize($archivo));

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 (LOCK REAL) lee saldo: $saldo\n", FILE_APPEND);

sleep(2);

$nuevo = $saldo - 300;

// volver al inicio del archivo
ftruncate($fp, 0);
rewind($fp);
fwrite($fp, $nuevo);

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 (LOCK REAL) escribe saldo: $nuevo\n", FILE_APPEND);

// liberar
flock($fp, LOCK_UN);
fclose($fp);

header("Location: index.php");