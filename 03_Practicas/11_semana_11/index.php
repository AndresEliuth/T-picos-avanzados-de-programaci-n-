<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- REQUISITO: Adaptación obligatoria a celulares -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de inventario</title>
    <link rel="stylesheet" href="style.css"> <!-- Vincula el diseño responsive -->
</head>
<body>

<div class="container">
    <header>
        <h1>Control de inventario</h1>
    </header>

    <div class="card">
        <?php
            // Traemos el archivo de configuración externa
            include 'config_campos.php';

            // Generamos los inputs automáticamente basándonos en el archivo externo
            foreach ($mis_campos as $id => $info) {
                echo "<div class='campo-grupo'>";
                echo "<label style='font-weight:bold;'>{$info['label']}</label>";
                // El ID del input coincide con la clave del arreglo para que JS lo encuentre
                echo "<input type='{$info['tipo']}' id='$id' placeholder='Ingresa {$info['label']}'>";
                echo "</div>";
            }
        ?>
        <!-- Botón que activa la función de guardado en app.js -->
        <button class="btn-add" onclick="agregar()">Registrar Producto</button>
    </div>

    <div class="table-wrapper">
        <!-- Buscador en tiempo real -->
        <input type="text" id="buscar" onkeyup="filtrar()" placeholder=" Buscar por nombre o código...">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tabla">
                <!-- Se llena automáticamente con JavaScript -->
            </tbody>
        </table>
    </div>
</div>

<!-- Importante: type='module' permite usar importaciones modernas de Firebase -->
<script type="module" src="app.js"></script>
</body>
</html>