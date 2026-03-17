<?php
function logMsg($msg) {
    file_put_contents("log.txt", date("Y-m-d H:i:s") . " - $msg\n", FILE_APPEND);
}

logMsg("Tarea 1 ejecutándose");

// Simulación
for ($i = 1; $i <= 3; $i++) {

    sleep(2);

    logMsg("Tarea 1 paso $i");

    //  DETENCIÓN REAL DEL LOOP
    $estado = trim(file_get_contents("estado_tarea1.txt"));

    if ($estado == "detenido") {
        logMsg("Tarea 1 detenida manualmente");
        exit;
    }
}

// Finaliza
logMsg("Tarea 1 finalizada");
file_put_contents("estado_tarea1.txt", "detenido");
?>