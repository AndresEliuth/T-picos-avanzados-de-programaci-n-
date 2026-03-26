<?php

$saldo = file_get_contents("recurso.txt");

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 lee saldo: $saldo\n", FILE_APPEND);

sleep(2); // Simula proceso

$nuevo = $saldo - 300;

file_put_contents("recurso.txt", $nuevo);

file_put_contents("log.txt", date("H:i:s") . " - Tarea 1 escribe saldo: $nuevo\n", FILE_APPEND);

header("Location: index.php");