<?php
    session_start();

    // Verifica si la sesión del usuario es una cadena
    if (isset($_SESSION['usuario']) && is_string($_SESSION['usuario'])) {
        $nombreUsuario = $_SESSION['usuario'];
    } else {
        // Mensaje de error si los datos de usuario no están disponibles o mal formateados
        echo "Error: No se encontraron los datos del usuario. Por favor, inicie sesión nuevamente.";
        var_dump($_SESSION['usuario']); // Para depuración
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma GIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Static/CSS/plataforma.css"> <!-- Añade tu propio CSS -->
</head>
<body>
    <header>
        <h1>Cursos GIO</h1>
        <nav>
            <ul>
                <li><a class="navbar-brand" href="index.php">Inicio</a></li>
                <li><a class="navbar-brand" href="cursos.php">Cursos</a></li>
                <li><a class="navbar-brand" href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Información del Curso -->
                <div class="course-info">
                    <h1 id="course-title">Nombre del Curso</h1>
                    <p id="course-description">Descripción del curso aquí. Explica los objetivos del curso, los temas que se cubrirán y cualquier otra información relevante.</p>
                </div>

                <!-- Módulos del Curso -->
                <div class="course-modules">
                    <h2>Módulos</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h3>Módulo 1: Introducción</h3>
                            <p>Descripción del módulo.</p>
                            <a href="modulo.php" class="btn">Ver Lección</a>
                        </li>
                        <li class="list-group-item">
                            <h3>Módulo 2: Temas Avanzados</h3>
                            <p>Descripción del módulo.</p>
                            <a href="#" class="btn">Ver Lección</a>
                        </li>
                        <li class="list-group-item">
                            <h3>Módulo 3: Temas Avanzados</h3>
                            <p>Descripción del módulo.</p>
                            <a href="#" class="btn">Ver Lección</a>
                        </li>
                        <li class="list-group-item">
                            <h3>Módulo 4: Temas Avanzados</h3>
                            <p>Descripción del módulo.</p>
                            <a href="#" class="btn">Ver Lección</a>
                        </li>
                        <!-- Añade más módulos según sea necesario -->
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <!-- Información Adicional -->
                <div class="course-details">
                    <h4>Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?></h4>
                    <br>
                    <h3>Detalles del Curso</h3>
                    <p><strong>Instructor:</strong> Nombre del Instructor</p>
                    <p><strong>Duración:</strong> 4 horas</p>
                    <p><strong>Inicio:</strong> $50</p>
                    <p><strong>Fin:</strong> $50</p>
                    <!-- Puedes añadir más detalles si es necesario -->
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybB08ubThb2m0x4Fj9ewlbwBL2MxVoPHjB0sZy0IelGZjP5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
