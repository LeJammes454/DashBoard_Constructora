<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, telefono, correo_electronico, asunto, mensaje) 
            VALUES ('$nombre', '$telefono', '$correo_electronico', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        header("Location: confirmacion.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
