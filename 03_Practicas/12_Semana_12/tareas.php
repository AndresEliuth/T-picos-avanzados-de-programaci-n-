<?php
session_start();
if (!isset($_SESSION['tareas'])) $_SESSION['tareas'] = ["Tarea 1"];

if (isset($_POST['add'])) {
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
    <h1>Tareas</h1>
    <div class="menu-btn" onclick="toggleMenu()">☰</div>
</header>

<nav id="menu">
    <a href="index.php">Inicio</a>
    <a href="perfil.php">Perfil</a>
    <a href="tareas.php" class="active">Mis Tareas</a>
</nav>

<main>
    <form method="POST" class="card">
        <input type="text" name="txt" placeholder="Nueva tarea..." required style="width:90%; padding:10px; margin-bottom:10px;">
        <button type="submit" name="add" class="btn">Agregar</button>
    </form>

    <?php foreach($_SESSION['tareas'] as $i => $t): ?>
        <div class="card">
            <?php echo $t; ?>
            <a href="?del=<?php echo $i; ?>" style="float:right; color:red; text-decoration:none;">[X]</a>
        </div>
    <?php endforeach; ?>
</main>

<script>
function toggleMenu() {
    document.getElementById('menu').classList.toggle('open');
}
</script>

</body>
</html>