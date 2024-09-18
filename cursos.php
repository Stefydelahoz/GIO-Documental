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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos GIO</title>
    <script src="https://kit.fontawesome.com/685036d062.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="static/css/cursos.css">
</head>
<body>
    <header>
        <h1>Cursos GIO</h1>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="dashboard.html">Mi Panel</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="dashboard">
            <h2>Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?></h2>
            <div class="courses">
                <h3>Mis Cursos</h3>
                <div class="course-item">
                    <h4>Curso de HTML Básico</h4>
                    <p>Progreso: 40%</p>
                    <a href="plataforma.php" class="btn">Continuar Curso</a>
                </div>
                <div class="course-item">
                    <h4>Curso de CSS Avanzado</h4>
                    <p>Progreso: 75%</p>
                    <a href="" class="btn">Continuar Curso</a>
                </div>
                <!-- Puedes añadir más cursos según la información del usuario -->
            </div>
            <div class="available-courses">
                <h3>Cursos Disponibles</h3>
                <p>Explora más cursos para seguir aprendiendo.</p>
                <a href="cursos.html" class="btn">Ver Cursos Disponibles</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Cursos GIO. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
