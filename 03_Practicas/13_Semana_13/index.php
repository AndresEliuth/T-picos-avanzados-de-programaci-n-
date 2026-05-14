<?php session_start(); $_SESSION['usuario'] = "Pepe"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sistema Móvil</title>
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
    <a href="tareas.php">Tareas</a>
</nav>

<main>
    <div class="card">
        <h2>Panel Principal</h2>
        <p>Bienvenido al administrador de tareas.</p>
        <!-- Ahora este botón estará centrado y no medirá toda la pantalla en PC -->
        <a href="tareas.php" class="btn">Ir a Mis Tareas</a>
    </div>
</main>

<script>
function toggleMenu() {
    document.getElementById('menu').classList.toggle('open');
}
</script>

</body>
</html>