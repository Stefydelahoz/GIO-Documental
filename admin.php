<?php
// Asegúrate de que solo los administradores puedan acceder a esta página
session_start();
if (!isset($_SESSION['usuario']) || !in_array($_SESSION['usuario'], ['admin', 'sdelahozc@poligran.edu.co'])) {
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <script src="https://kit.fontawesome.com/685036d062.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="Static/CSS/admin.css">
</head>
<body>
    <header>
        <h1>Panel de Administrador</h1>
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Usuarios</a></li>
                <li><a href="">Configuración</a></li>
                <li><a href="">Informes</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar</a></li>
            </ul>
        </nav>
    </header>
    <aside>
        <h2>Menú de Navegación</h2>
        <ul>
            <li><a href="">Panel de Control</a></li>
            <li><a href="">Gestión de Usuarios</a></li>
            <li><a href="">Configuración del Sistema</a></li>
            <li><a href="">Informes y Estadísticas</a></li>
        </ul>
    </aside>
    <main>
        <h2>Bienvenido al Panel de Administrador</h2>
        <div class="dashboard">
            <div class="card">
                <h3>Estadísticas</h3>
                <p>Resumen de estadísticas importantes.</p>
            </div>
            <div class="card">
                <h3>Notificaciones</h3>
                <p>Últimas notificaciones y alertas.</p>
            </div>
            <!-- Añade más tarjetas o widgets aquí -->
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Tu Aplicación. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
