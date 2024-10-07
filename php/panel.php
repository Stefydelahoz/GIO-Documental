<?php
session_start();
require 'conexion_be.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$query = "SELECT c.nombre_curso, p.progreso FROM cursos c 
          JOIN progreso p ON c.id_curso = p.curso_id 
          WHERE p.usuario_id = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$resultado = $stmt->get_result();
?>