<?php
require 'conexion.php'; // Asegúrate de incluir el archivo de conexión a la base de datos

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_usuario = $_POST['id_usuario'];

    // Consulta para eliminar el usuario de la base de datos
    $query = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('i', $id_usuario);

    if ($stmt->execute()) {
        echo "Usuario eliminado correctamente.";
        // Redirigir de nuevo a la lista de usuarios o mostrar un mensaje de éxito
        header('Location: lista_usuarios.php');
    } else {
        echo "Error al eliminar el usuario.";
    }

    $stmt->close();
    $conexion->close();
}
?>
