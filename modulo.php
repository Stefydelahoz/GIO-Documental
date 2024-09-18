<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo del Curso</title>
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
                <!-- Información del Módulo -->
                <div class="module-info">
                    <h1 id="module-title">Título del Módulo</h1>
                    <p id="module-description">Descripción del módulo aquí. Explica los objetivos, temas cubiertos y cualquier otra información relevante.</p>
                    
                    <!-- Contenido del Módulo -->
                    <div class="module-content">
                        <h2>Contenido</h2>
                        <p>Aquí puedes incluir texto, imágenes, videos, y otros recursos relacionados con el módulo.</p>
                        <!-- Ejemplo de video -->
                        <div class="embed-responsive embed-responsive-16by9 mb-3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        </div>
                        <!-- Ejemplo de documento -->
                        <a href="ruta/al/documento.pdf" class="btn btn-secondary">Descargar Documento</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- Módulos Relacionados o Navegación -->
                <div class="module-navigation">
                    <h2>Módulos Relacionados</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="curso-modulo.php?id=1">Módulo 1: Introducción</a>
                        </li>
                        <li class="list-group-item">
                            <a href="curso-modulo.php?id=2">Módulo 2: Temas Avanzados</a>
                        </li>
                        <li class="list-group-item">
                            <a href="curso-modulo.php?id=2">Módulo 3: Temas Avanzados</a>
                        </li>
                        <li class="list-group-item">
                            <a href="curso-modulo.php?id=2">Módulo 4: Temas Avanzados</a>
                        </li>
                        <!-- Añade más módulos según sea necesario -->
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Cursos GIO. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybB08ubThb2m0x4Fj9ewlbwBL2MxVoPHjB0sZy0IelGZjP5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
