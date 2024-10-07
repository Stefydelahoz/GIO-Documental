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
                <li><a href="usuarios.php">Usuarios</a></li>
                <li><a href="configuracion.php">Configuración</a></li>
                <li><a href="informes.php">Informes</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <aside>
                        <h2>Menú de Navegación</h2>
                        <ul>
                            <li><a href="admin.php">Inicio</a></li>
                            <li><a href="usuarios.php">Usuarios</a></li>
                            <li><a href="configuracion.php">Configuración</a></li>
                            <li><a href="informes.php">Informes</a></li>
                            <li><a href="php/cerrar_sesion.php">Cerrar</a></li>
                        </ul>
                    </aside>
                </div>
                <div class=" col-md-9">
                    <div class="grid text-center">
                            <h1>Bienvenido al Panel de Administrador</h1>
                    </div>
                    <br>
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
