<?php
// Asegúrate de que solo los administradores puedan acceder a esta página
session_start();
if (!isset($_SESSION['usuario']) || !in_array($_SESSION['usuario'], ['admin', 'sdelahozc@poligran.edu.co'])) {
    header("location:index.php");
    exit();
}

// Incluir la conexión a la base de datos
include 'php/conexion_be.php'; // Ajusta la ruta si es necesario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre_curso'];
    $descripcion = $_POST['descripcion_curso'];
    $duracion = $_POST['duracion_curso'];
    $costo = $_POST['costo_curso'];

    // Validar los datos (opcional)
    if (empty($nombre) || empty($descripcion) || empty($duracion) || empty($costo)) {
        echo "Todos los campos son obligatorios";
        exit();
    }

    // Insertar el nuevo curso en la base de datos usando MySQLi
    $sql = "INSERT INTO cursos (nombre, descripcion, duracion, costo, estado) VALUES (?, ?, ?, ?, 'habilitado')";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssds", $nombre, $descripcion, $duracion, $costo); // s: string, d: double, i: integer, b: blob

    if ($stmt->execute()) {
        echo "Curso creado con éxito";
        header("Location: configuracion.php"); // Redirigir de vuelta a la página de configuración
        exit();
    } else {
        echo "Error al crear el curso: " . $stmt->error; // Para mostrar el error específico de la consulta
    }
}
?>

