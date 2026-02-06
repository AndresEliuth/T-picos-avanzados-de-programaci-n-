<?php
if ($_POST) {// si exite el arreglo post entonces llegaron los datos al servidor
    echo "Llegaron datos al servidor<br>";

    // Mostramos TODO lo recibido
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

} else {
    echo "No se ha enviado nada todavía";
}
?>
