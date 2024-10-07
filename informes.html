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

// Consultar las inscripciones junto con los cursos y usuarios
$sql = "
    SELECT 
        i.id AS inscripcion_id,
        c.nombre AS curso_nombre,
        u.nombre_completo AS usuario_nombre, -- Cambia 'nombre' por 'nombre_completo'
        u.correo AS usuario_email,           -- Cambia 'email' por 'correo'
        i.fecha_inscripcion
    FROM 
        inscripciones i
    JOIN 
        cursos c ON i.curso_id = c.id
    JOIN 
        usuarios u ON i.usuario_id = u.id
";

$result = $conexion->query($sql);
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
                <li><a href="configuracion.php">Configuración</a></li>
                <li><a href="">Informes</a></li>
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
                                <li><a href="admin.php">Inicio</a></li>
                                <li><a href="usuarios.php">Usuarios</a></li>
                                <li><a href="configuracion.php">Configuración</a></li>
                                <li><a href="informes.php">Informes</a></li>
                                <li><a href="php/cerrar_sesion.php">Cerrar</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="grid text-center">
                            <h1>Informes Cursos</h1>
                        </div>
                        <div class="container mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Inscripción</th>
                                        <th>Curso</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Fecha de Inscripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($result->num_rows > 0): ?>
                                        <?php while ($inscripcion = $result->fetch_assoc()): ?>
                                            <tr>
                                                <td><?php echo $inscripcion['inscripcion_id']; ?></td>
                                                <td><?php echo $inscripcion['curso_nombre']; ?></td>
                                                <td><?php echo $inscripcion['usuario_nombre']; ?></td>
                                                <td><?php echo $inscripcion['usuario_email']; ?></td>
                                                <td><?php echo $inscripcion['fecha_inscripcion']; ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5">No hay inscripciones registradas.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            
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

