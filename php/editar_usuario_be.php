<?php
session_start();
require 'conexion.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_usuario = $_SESSION['id']; // Obtén el ID del usuario desde la sesión
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
    
    // Manejo de la imagen
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $nombreFoto = $_FILES['foto']['name'];
        $rutaFoto = 'uploads/' . $nombreFoto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $rutaFoto);
    }

    // Actualiza los datos del usuario en la base de datos
    $query = "UPDATE usuarios SET nombre = ?, correo = ?";

    // Si se ingresó una nueva contraseña, se agrega la actualización de la columna de la contraseña
    if ($password) {
        $query .= ", password = '$password'";
    }

    $query .= " WHERE id = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param('ssi', $nombre, $correo, $id_usuario);

    if ($stmt->execute()) {
        echo "Perfil actualizado correctamente.";
        // Redirigir a la página del perfil o al panel de usuario
    } else {
        echo "Error al actualizar el perfil.";
    }

    $stmt->close();
    $conexion->close();
}
?>
 