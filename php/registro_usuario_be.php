<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$curso_id = $_POST['curso_id']; // Asumiendo que recibes el ID del curso al que se inscribe

// Validar que no haya campos vacíos
if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena) || empty($curso_id)) {
    echo '
        <script>
            alert("Por favor, completa todos los campos.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Encriptar contraseña
$contrasena = hash('sha512', $contrasena);

// Verificar que el correo y el nombre de usuario no se repitan en la BD
$query = "SELECT * FROM usuarios WHERE correo=? OR usuario=?";
$stmt = $conexion->prepare($query);
$stmt->bind_param('ss', $correo, $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Comprobar si es el correo o el usuario el que ya está registrado
    $row = $result->fetch_assoc();
    if ($row['correo'] == $correo) {
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro correo");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    if ($row['usuario'] == $usuario) {
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro usuario");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
}

// Si no existe el usuario, proceder a registrarlo
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($query);
$stmt->bind_param('ssss', $nombre_completo, $correo, $usuario, $contrasena);

if ($stmt->execute()) {
    // Obtener el ID del usuario recién creado
    $usuario_id = $stmt->insert_id;
    
    // Insertar la inscripción en la tabla de cursos
    $query_inscripcion = "INSERT INTO inscripciones (usuario_id, curso_id) VALUES (?, ?)";
    $stmt_inscripcion = $conexion->prepare($query_inscripcion);
    $stmt_inscripcion->bind_param('ii', $usuario_id, $curso_id);
    
    if ($stmt_inscripcion->execute()) {
        echo '
            <script>
                alert("Usuario registrado y inscrito en el curso exitosamente");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Error en la inscripción al curso");
                window.location = "../index.php";
            </script>
        ';
    }
    
    $stmt_inscripcion->close();
} else {
    echo '
        <script>
            alert("Inténtalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
        </script>
    ';
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
