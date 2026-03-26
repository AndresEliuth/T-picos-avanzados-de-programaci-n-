<?php

$saldo = file_get_contents("recurso.txt");

file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 lee saldo: $saldo\n", FILE_APPEND);

sleep(2);

$nuevo = $saldo - 500;

file_put_contents("recurso.txt", $nuevo);

file_put_contents("log.txt", date("H:i:s") . " - Tarea 2 escribe saldo: $nuevo\n", FILE_APPEND);

header("Location: index.php");