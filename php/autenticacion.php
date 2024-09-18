<?php
    // No llamamos a session_start() aquí, ya que se está llamando en index.php

    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $administradores = ['admin', 'sdelahozc@poligran.edu.co'];

        if (in_array($usuario, $administradores)) {
            if (basename($_SERVER['PHP_SELF']) !== 'admin.php') {
                header('Location: admin.php');
                exit();
            }
        } else {
            if (basename($_SERVER['PHP_SELF']) !== 'cursos.php') {
                header('Location: cursos.php');
                exit();
            }
        }
    }
?>

