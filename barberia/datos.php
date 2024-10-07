<?php

// Incluir el archivo que contiene la clase mainModel
require_once "./models/datosModel.php";

// Crear una instancia de la clase
class TestConnection extends datosModel {
    
    // Método para probar la conexión
    public static function datos() {
        try {
            $datos = new datosModel();
            $datos = $datos -> consultarDatos();
            return json_encode($datos);
        } catch (PDOException $e) {
            // Si hay un error, mostrar el mensaje
            echo "Error en la conexión: " . $e->getMessage();
        }
    }
}
