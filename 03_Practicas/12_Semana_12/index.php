<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>App Tareas</h1>
    <div class="menu-btn" onclick="toggleMenu()">☰</div>
</header>

<nav id="menu">
    <a href="index.php" class="active">Inicio</a>
    <a href="perfil.php">Perfil</a>
    <a href="tareas.php">Mis Tareas</a>
</nav>

<main>
    <div class="card">
        <h2>Hola, <?php echo $_SESSION['usuario'] ?? 'Usuario'; ?></h2>
        <p>Bienvenido</p>
    </div>
</main>

<script>
function toggleMenu() {
    document.getElementById('menu').classList.toggle('open');
}
</script>

</body>
</html>