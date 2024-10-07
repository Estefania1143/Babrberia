<?php

// Incluir el archivo que contiene la clase mainModel
require_once "./config/conexion.php";

// Crear una instancia de la clase
class TestConnection extends mainModel {
    
    // Método para probar la conexión
    public static function test() {
        try {
            // Intentar conectar
            $connection = self::connect();
            echo "Conexión exitosa a la base de datos.";
        } catch (PDOException $e) {
            // Si hay un error, mostrar el mensaje
            echo "Error en la conexión: " . $e->getMessage();
        }
    }
}

// Ejecutar la prueba de conexión
TestConnection::test();
