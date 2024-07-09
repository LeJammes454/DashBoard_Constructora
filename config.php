<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario es diferente
$password = "0454"; // Cambia esto si tu contraseña es diferente
$dbname = "contactos_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
