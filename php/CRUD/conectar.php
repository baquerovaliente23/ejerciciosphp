<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "1234";
$dbname = "prueba";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Habilitar el reporte de errores y excepciones

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$dbname'.";
}
?>



