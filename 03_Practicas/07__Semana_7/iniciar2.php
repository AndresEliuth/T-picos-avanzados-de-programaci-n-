<?php
$php = "C:\\xampp\\php\\php.exe";

pclose(popen("start /B $php tarea2.php", "r"));

file_put_contents("estado_tarea2.txt", "ejecutando");

file_put_contents(
    "log.txt",
    date("Y-m-d H:i:s") . " - Tarea 2 iniciada\n",
    FILE_APPEND
);

header("Location: index.php");
?>