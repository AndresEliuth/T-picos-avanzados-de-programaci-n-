<?php
// Arreglo maestro: define la estructura de tu punto de venta.
// Si quieres un sistema de farmacia, ferretería o ropa, solo cambias esto.
$mis_campos = [
    "codigo"      => ["tipo" => "text",   "label" => "Código de Barras"], // ID para la DB y etiqueta visual
    "nombre"      => ["tipo" => "text",   "label" => "Nombre del Producto"],
    "precio"      => ["tipo" => "number", "label" => "Precio de Venta ($)"],
    "existencias" => ["tipo" => "number", "label" => "Stock / Existencias"]
];
?>