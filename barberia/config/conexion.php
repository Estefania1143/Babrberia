<?php
$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "nombre_de_tu_base_de_datos";

$conexion = new mysqli($localhost, $root, "", $reserva);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
