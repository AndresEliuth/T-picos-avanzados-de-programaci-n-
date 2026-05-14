<?php
session_start();
if (!isset($_SESSION['tareas'])) $_SESSION['tareas'] = ["Práctica 13"];
if (isset($_POST['add']) && !empty($_POST['txt'])) {
    $_SESSION['tareas'][] = $_POST['txt'];
    header("Location: tareas.php"); exit;
}
if (isset($_GET['del'])) {
    unset($_SESSION['tareas'][$_GET['del']]);
    $_SESSION['tareas'] = array_values($_SESSION['tareas']);
    header("Location: tareas.php"); exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Mis Tareas</h1>
        <div class="menu-btn" onclick="toggleMenu()">☰</div>
    </header>
    <nav id="menu">
        <a href="index.php">Inicio</a>
        <a href="perfil.php">Perfil</a>
        <a href="tareas.php" class="active">Tareas</a>
    </nav>
    <main>
        <div class="card">
            <form method="POST">
                <input type="text" name="txt" placeholder="Nueva tarea..." required>
                <button type="submit" name="add" class="btn">Guardar Tarea</button>
            </form>
        </div>
        <?php foreach($_SESSION['tareas'] as $i => $t): ?>
            <div class="card-tarea">
                <span><?php echo htmlspecialchars($t); ?></span>
                <a href="?del=<?php echo $i; ?>" class="btn-borrar">Borrar</a>
            </div>
        <?php endforeach; ?>
        <a href="index.php" class="btn btn-secondary">Regresar</a>
    </main>
    <script>function toggleMenu(){ document.getElementById('menu').classList.toggle('open'); }</script>
</body>
</html>