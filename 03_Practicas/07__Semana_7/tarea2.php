<?php
function logMsg($msg) {
    file_put_contents("log.txt", date("Y-m-d H:i:s") . " - $msg\n", FILE_APPEND);
}

logMsg("Tarea 2 ejecutándose");

for ($i = 1; $i <= 3; $i++) {

    sleep(2);

    logMsg("Tarea 2 paso $i");

    $estado = trim(file_get_contents("estado_tarea2.txt"));

    if ($estado == "detenido") {
        logMsg("Tarea 2 detenida manualmente");
        exit;
    }
}

logMsg("Tarea 2 finalizada");
file_put_contents("estado_tarea2.txt", "detenido");
?>