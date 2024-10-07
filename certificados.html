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
    $usuario_id = $_SESSION['usuario_id'];

    // Consultar los certificados del usuario
    $query_certificados = "SELECT c.nombre_curso, cer.nombre_certificado, cer.ruta_certificado 
                        FROM certificados cer 
                        JOIN cursos c ON cer.curso_id = c.id_curso 
                        WHERE cer.usuario_id = ?";
    $stmt_certificados = $conexion->prepare($query_certificados);
    $stmt_certificados->bind_param("i", $usuario_id);
    $stmt_certificados->execute();
    $resultado_certificados = $stmt_certificados->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Usuario</title>
    <script src="https://kit.fontawesome.com/685036d062.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="static/css/cursos.css">
</head>
<body>
<header>
        <h1>Mi Panel de Usuario</h1>
        <nav>
            <ul>
                <li><a href="cursos.php">Inicio</a></li>
                <li><a href="panel.php">Mi Panel</a></li>
                <li><a href="">Mis Certificados</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="dashboard">     
        <h2>Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?></h2>
        <nav>
            <ul>
                <li><a href="tareas.php">Tareas</a></li>
                <li><a href="calificaciones.php">Calificaciones</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
        <h2>Tus Certificados</h2>
        <?php if ($resultado_certificados->num_rows > 0): ?>
            <ul>
                <?php while ($fila = $resultado_certificados->fetch_assoc()): ?>
                    <li>
                        Curso: <?php echo $fila['nombre_curso']; ?><br>
                        Certificado: <a href="descargar_certificado.php?ruta=<?php echo $fila['ruta_certificado']; ?>">
                        <?php echo $fila['nombre_certificado']; ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No tienes certificados disponibles.</p>
        <?php endif; ?>
    </section>
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
