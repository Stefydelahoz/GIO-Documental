<?php
    // Asegúrate de que solo los administradores puedan acceder a esta página
    session_start();
    if (!isset($_SESSION['usuario']) || !in_array($_SESSION['usuario'], ['admin', 'sdelahozc@poligran.edu.co'])) {
        header("location:index.php");
        exit();
    }

    // Conexión a la base de datos
    $host = 'localhost'; 
    $db = 'empresa_bd'; 
    $usuario = 'root';
    $contrasena = ''; // Deja el campo vacío si no has configurado una contraseña

    $conn = new mysqli($host, $usuario, $contrasena, $db);

    // Verifica si la conexión a la base de datos es correcta
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para obtener los usuarios y sus datos
    $sql = "SELECT id, nombre_completo, correo FROM usuarios";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuarios</title>
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
            <div class="row">
                <div class="col-md-3">
                    <aside>
                        <h2>Gestión de Usuarios</h2>
                        <ul>
                            <li><a href="admin.php">Inicio</a></li>
                            <li><a href="usuarios.php">Consultar Usuarios</a></li>
                            <li><a href="registrar.php">Registrar Usuarios</a></li>
                            <li><a href="editar.php">Editar Usuarios</a></li>
                            <li><a href="">Eliminar Usuarios</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="grid text-center">
                        <h1>Eliminar Usuario</h1>
                    </div>
                    <div class="container mt-5">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row['nombre_completo']}</td>
                                            <td>{$row['correo']}</td>
                                            <td>
                                                <form action='php/eliminar_usuario_be.php' method='POST'>
                                                    <input type='hidden' name='id_usuario' value='{$row['id']}'>
                                                    <button type='submit' class='btn btn-danger'>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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
    <script>
        document.querySelectorAll('.btn-danger').forEach(function(button) {
            button.addEventListener('click', function(event) {
                if (!confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
                    event.preventDefault(); // Previene la acción si el usuario cancela
                }
            });
        });
    </script>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>
