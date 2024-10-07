<?php
if (isset($_GET['ruta'])) {
    $ruta_certificado = $_GET['ruta'];

    // Verificar que el archivo existe
    if (file_exists($ruta_certificado)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($ruta_certificado) . '"');
        header('Content-Length: ' . filesize($ruta_certificado));
        readfile($ruta_certificado);
        exit();
    } else {
        echo "El certificado no existe.";
    }
} else {
    echo "No se ha especificado el certificado.";
}
?>
