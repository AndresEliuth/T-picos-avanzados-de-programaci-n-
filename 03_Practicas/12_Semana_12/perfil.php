<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>Mi Perfil</h1>
    <div class="menu-btn" onclick="toggleMenu()">☰</div>
</header>

<nav id="menu">
    <a href="index.php">Inicio</a>
    <a href="perfil.php" class="active">Perfil</a>
    <a href="tareas.php">Mis Tareas</a>
</nav>

<main>
    <div class="card">
        <h3>Información</h3>
        <p>Usuario: <?php echo $_SESSION['usuario'] ?? 'Pepe'; ?></p>
    </div>
</main>

<script>
function toggleMenu() {
    document.getElementById('menu').classList.toggle('open');
}
</script>

</body>
</html>