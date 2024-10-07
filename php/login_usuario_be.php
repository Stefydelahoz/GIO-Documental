<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Verificar el usuario y la contraseña
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    // Obtener los datos del usuario autenticado
    $usuario = mysqli_fetch_assoc($validar_login);

    // Guardar el correo en la sesión
    $_SESSION['usuario'] = $correo;

    // Verificar si el usuario es un administrador
    if ($usuario['rol'] === 'admin') {
        // Redirigir a la página de administrador
        header("location: ../admin.php");
        exit;
    } else {
        // Redirigir a la página de visualizador o menú general
        header("location: ../cursos.php");
        exit;
    }
} else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../home.php";
        </script>
    ';
    exit;
}
?>



