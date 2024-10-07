<?php
// Asegúrate de que solo los administradores puedan acceder a esta página
session_start();
if (!isset($_SESSION['usuario']) || !in_array($_SESSION['usuario'], ['admin', 'sdelahozc@poligran.edu.co'])) {
    header("location:index.php");
    exit();
}

// Incluir la conexión a la base de datos
include 'php/conexion_be.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger el ID del curso y el nuevo estado
    $curso_id = $_POST['curso_id'];
    $nuevo_estado = $_POST['estado_curso'] == 'habilitar' ? 'habilitado' : 'deshabilitado';

    // Actualizar el estado del curso en la base de datos
    $sql = "UPDATE cursos SET estado = :nuevo_estado WHERE id = :curso_id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nuevo_estado', $nuevo_estado);
    $stmt->bindParam(':curso_id', $curso_id);

    if ($stmt->execute()) {
        // Redirigir de vuelta a la página de configuración
        header("Location: configuracion.php");
        exit();
    } else {
        echo "Error al actualizar el estado del curso.";
    }
}
?>
