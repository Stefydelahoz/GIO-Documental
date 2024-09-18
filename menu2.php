<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes de iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MENU</title>
        <script src="https://kit.fontawesome.com/685036d062.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="Static/CSS/menu.css" >
    </head>
    <body>
        <header>
            <div class="header_superior">
                <div class="logo">            
                    <img src="Static/Img/logo.png" alt="">
                </div>
                <h1>GESTION INTEGRAL EN ORGANIZACIÓN DOCUMENTAL</h1>
            <!--<div class="search">
                    <input type="search" placeholder="¿qué deseas buscar?">
                </div>-->  
            </div>
            <div class="container__menu">

                <div class="menu">
                    <input type="checkbox" id="check__menu">
                    <label id="#label__check" for="check__menu">
                        <i class="fa-solid fa-bars icon__menu"></i>
                    </label>
                    <nav>
                        <ul>
                            <li><a href="#" id="selected"></a></li>
                            <li><a href="#">Nuestra Empresa</a></li>
                            <li><a href="productos.php">Productos</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Capacitaciones</a></li>
                            <li><a href="#">Nuestros Clientes</a></li>
                            <li><a href="#">Contactanos</a></li> 
                            <li><a href="php/cerrar_sesion.php">Cerrar</a></li>
                        </ul>
                    </nav>
                </div>

            </div>

        </header>

        <main>
            <h2>Nuestra Empresa</h2>
            <div class="container-fluid">
                <div class="gill">
                    <div class="card mb-3" style="max-width: 900px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Static/Img/mision.jpeg" class="img-fluid rounded-start" alt="auto">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Misión</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="">
                    <div class="card mb-3" style="max-width: 900px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Static/Img/vision.jpeg" class="img-fluid rounded-start" alt="auto">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Visión</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>            
        </main>
        
        <FOOTER>
            <p>@Stefanny De La Hoz</p> 
        </FOOTER>

    </body>
</html>