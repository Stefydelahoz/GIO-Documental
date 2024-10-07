<?php
// Asegúrate de que solo los administradores puedan acceder a esta página
session_start();
if (!isset($_SESSION['usuario']) || !in_array($_SESSION['usuario'], ['admin', 'sdelahozc@poligran.edu.co'])) {
    header("location:index.php");
    exit();
}

// Incluir la conexión a la base de datos
include 'php/conexion_be.php';  // Asegúrate de que el archivo existe y contiene la conexión con MySQLi

// Verifica que la conexión se haya realizado correctamente
if (!$conexion) {  // Usamos $conexion ya que es la variable de MySQLi
    die("Error: No se pudo conectar a la base de datos.");
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
                <li><a href="admin.php">Inicio</a></li>
                <li><a href="usuarios.php">Usuarios</a></li>
                <li><a href="">Configuración</a></li>
                <li><a href="informes.php">Informes</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <aside>
                            <h2>Configuración Cursos</h2>
                            <ul>
                                <li><a href="admin.php">Panel de Control</a></li>
                                <li><a href="consultar.php">Consultar Cursos</a></li>
                                <li><a href="">Crear Nuevo Curso</a></li>
                                <li><a href="habilitar.php">Habilitar/Deshabilitar</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class=" col-md-9">
                        <div class="grid text-center">
                            <h1>Crear Nuevo Curso</h1>
                        </div>
                        <div class="container mt-5">
                            <!-- Sección para crear cursos -->
                            <section class="mt-4">
                                <form action="php/crear_curso.php" method="POST">
                                    <div class="mb-3">
                                        <label for="nombre_curso" class="form-label">Nombre del Curso</label>
                                        <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descripcion_curso" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="descripcion_curso" name="descripcion_curso" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="duracion_curso" class="form-label">Duración (horas)</label>
                                        <input type="number" class="form-control" id="duracion_curso" name="duracion_curso" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="costo_curso" class="form-label">Costo (COP)</label>
                                        <input type="number" class="form-control" id="costo_curso" name="costo_curso" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Crear Curso</button>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-flex">
            <div class="gridd text-center">
                <div class="g-col-4">
                    <p>&#169;Elaborado por: Stefanny De La Hoz</p>
                    <p>Política y tratamiento de datos Personales</p>
                    <p>Autorización de Tratamiento de Datos Personales</p>
                </div>
            </div>
        </div> 
    </footer>
</body>
</html>
