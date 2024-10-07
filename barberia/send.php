<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost"; // Cambiar si es necesario
    $username = "root"; // Cambiar si es necesario
    $password = ""; // Cambiar si es necesario
    $dbname = "reserva";

    // Crear la conexión
    $conn = new mysqli($localhost, $root, "" , $reserva);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST['name'];
    $celular = $_POST['celular'];
    $fecha = $_POST['fecha'];

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO dato (nombre, celular, fecha_hora) VALUES ('$nombre', '$celular', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cita agendada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
