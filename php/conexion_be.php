<?php

// Establecer conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "empresa_bd");

// Verificar si la conexión se ha realizado correctamente
if (!$conexion) {
    die("Error: No se pudo conectar a la Base de Datos. " . mysqli_connect_error());
} else {
    // Si necesitas, puedes habilitar esta línea para confirmar la conexión
    // echo 'Conectado exitosamente a la Base de Datos';
}

?>