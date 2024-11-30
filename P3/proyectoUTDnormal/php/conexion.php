<?php
$conexion = new mysqli('localhost', 'root', '', 'proyectoutd');
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
