<<?php
include 'conectar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    try {
        $sql = "UPDATE usuarios SET nombre=?, apellido=?, email=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nombre, $apellido, $email, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Registro actualizado exitosamente";
        } else {
            echo "El registro con ID $id no existe.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conn->close();
    }
}
?>
