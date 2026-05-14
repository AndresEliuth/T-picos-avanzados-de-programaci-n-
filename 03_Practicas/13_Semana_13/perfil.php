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
        <a href="tareas.php">Tareas</a>
    </nav>
    <main>
        <div class="card">
            <h3>Información del Usuario</h3>
            <p><strong>Nombre:</strong> <?php echo $_SESSION['usuario']; ?></p>
            <p><strong>Carrera:</strong> Ingeneria en sistemas computacionales</p>
            <a href="index.php" class="btn btn-secondary">Regresar al Inicio</a>
        </div>
    </main>
    <script>function toggleMenu(){ document.getElementById('menu').classList.toggle('open'); }</script>
</body>
</html>