<?php
$saldo = file_exists("recurso.txt") ? file_get_contents("recurso.txt") : 1000;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Control de Recursos</title>
</head>
<body>

<h2>CONTROL DE RECURSO COMPARTIDO</h2>

<p><strong>Saldo actual:</strong> $<?php echo $saldo; ?></p>

<h3>🔴 SIN CONTROL (puede fallar)</h3>
<a href="tarea1.php">Tarea 1 - Retirar 300</a><br>
<a href="tarea2.php">Tarea 2 - Retirar 500</a>

<h3>🟢 CON CONTROL (bloqueo)</h3>
<a href="tarea1_lock.php">Tarea 1 - Retirar 300</a><br>
<a href="tarea2_lock.php">Tarea 2 - Retirar 500</a>

<h3>📜 Log del sistema</h3>
<pre>
<?php
if(file_exists("log.txt")){
    echo file_get_contents("log.txt");
}
?>
</pre>

</body>
</html>