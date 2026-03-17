<?php
$tarea = $_POST['tarea'];

if ($tarea == 1) {
    file_put_contents("estado_tarea1.txt", "detenido");

    file_put_contents(
        "log.txt",
        date("Y-m-d H:i:s") . " - Tarea 1 detenida\n",
        FILE_APPEND
    );
}

if ($tarea == 2) {
    file_put_contents("estado_tarea2.txt", "detenido");

    file_put_contents(
        "log.txt",
        date("Y-m-d H:i:s") . " - Tarea 2 detenida\n",
        FILE_APPEND
    );
}

header("Location: index.php");
?>