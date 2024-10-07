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
                                <li><a href="admin.php">Panel de Control</a></li>
                                <li><a href="consultar.php">Consultar Cursos</a></li>
                                <li><a href="configuracion.php">Crear Nuevo Curso</a></li>
                                <li><a href="">Habilitar/Deshabilitar</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="grid text-center">
                            <h1>Habilitar o Deshabilitar Curso</h1>
                        </div>
                        <div class="container mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Duración</th>
                                        <th>Costo</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        // Obtener todos los cursos de la base de datos
                                        $sql = "SELECT * FROM cursos";
                                        $resultado = mysqli_query($conexion, $sql);  // Usamos la variable $conexion para MySQLi

                                        if (mysqli_num_rows($resultado) > 0):
                                            while ($curso = mysqli_fetch_assoc($resultado)): ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($curso['nombre']); ?></td>
                                                    <td><?php echo htmlspecialchars($curso['descripcion']); ?></td>
                                                    <td><?php echo htmlspecialchars($curso['duracion']); ?> Hrs</td>
                                                    <td><?php echo htmlspecialchars($curso['costo']); ?> COP</td>
                                                    <td><?php echo htmlspecialchars($curso['estado']); ?></td>
                                                    <td>
                                                        <form action="habilitar_desabilitar_curso.php" method="POST" style="display:inline;">
                                                            <input type="hidden" name="curso_id" value="<?php echo $curso['id']; ?>">
                                                            <?php if ($curso['estado'] == 'habilitado'): ?>
                                                                <input type="hidden" name="estado_curso" value="deshabilitar">
                                                                <button type="submit" class="btn btn-warning">Deshabilitar</button>
                                                            <?php else: ?>
                                                                <input type="hidden" name="estado_curso" value="habilitar">
                                                                <button type="submit" class="btn btn-success">Habilitar</button>
                                                            <?php endif; ?>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endwhile;
                                        else:
                                            echo "No se encontraron cursos.";
                                        endif;
                                    ?>
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

