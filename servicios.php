<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SERVICIOS</title>
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
                            <li><a href="home.php">Nuestra Empresa</a></li>
                            <li><a href="productos.php">Productos</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="capacitaciones.php">Capacitaciones</a></li>
                            <li><a href="clientes.php">Nuestros Clientes</a></li>
                            <li><a href="contactanos.php">Contactanos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <div class="container-flex">
                <div class="grid text-center">
                    <div class="g-col-4"><h1>Nuestros Servicios</h1></div>
                </div>
            </div>
            <br>
            <div class="container grid_center">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="card" style="width: 18rem;">
                                <img src="static/Img/instrumentos.jpeg" class="card-img-top" height="250">
                                <div class="card-body">
                                    <h5 class="card-title">Elaboración de Instrumentos Archivisiticos</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img src="static/Img/proyectos.jpeg" class="card-img-top" height="250">
                                <div class="card-body">
                                    <h5 class="card-title">Elaboración de Proyectos de Organización</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>      
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img src="static/Img/presupuestos.jpeg" class="card-img-top" height="250">
                                <div class="card-body">
                                    <h5 class="card-title">Elaboración de Presupuestos de Intervención</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                        </div>               
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-sm-4 mb-3">
                            <div class="card" style="width: 18rem;">
                                <img src="static/Img/capacitaciones.jpeg" class="card-img-top" height="250">
                                <div class="card-body">
                                    <h5 class="card-title">Capacitaciones</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img src="static/Img/auditorias.jpeg" class="card-img-top" height="250">
                                <div class="card-body">
                                    <h5 class="card-title">Auditorias</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br>
        <footer>
            <div class="container-flex">
                <div class="row">
                    <div class="col w-auto p-3">
                        <h3>Gio Documental</h3>
                        <br>
                        <div class="icon-container"> <!-- Contenedor para los íconos -->
                            <div class="icon">            
                                <img src="Static/Img/facebook.png" width="40" height="50" href="#">
                            </div>
                            <div class="icon">            
                                <img src="Static/Img/instagram.png" width="40" height="50" href="#">
                            </div>
                            <div class="icon">            
                                <img src="Static/Img/twiter.png" width="40" height="50" href="#">
                            </div>
                            <div class="icon">            
                                <img src="Static/Img/youtube.png" width="40" height="50" href="#">
                            </div>
                        </div>
                    </div>
                    <div class="col w-auto p-3">
                        <h3>Enlaces</h3>
                        <br>
                        <li><a href="home.php">Nuestra Empresa</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="capacitaciones.php">Capacitaciones</a></li>
                        <li><a href="clientes.php">Nuestros Clientes</a></li>
                    </div>
                    <div class="col w-auto p-3">
                        <h3>Suscribete</h3>
                        <br>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">@</span>
                            <input type="text" class="form-control" placeholder="Correo Electronico" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <button type="button" class="btn btn-dark">Suscribir</button>
                    </div>
                    <div class="col w-auto p-3">
                        <h3>Ubicación</h3>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31337.649824783282!2d-74.83002855!3d10.9477888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1725137239134!5m2!1ses!2sco" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>  
        </footer>
        <div class="container-flex">
            <div class="gridd text-center">
                <div class="g-col-4"><p>&#169;Elaborado por: Stefanny De La Hoz</p></div>
            </div>
        </div> 
        <!-- Contenedor de botones laterales -->
        <div class="botones-laterales">
            <a href="#inicio" class="boton-lateral">⬆ Subir</a>
            <a href="https://wa.me/573155098440" target="_blank" class="boton-lateral">WhatsApp</a>
            <a href="contactanos.php" class="boton-lateral">Contáctanos</a>
            <button id="modoOscuroBtn" class="boton-lateral">🌙 Modo Oscuro</button>
            <a href="index.php" class="boton-lateral">Ingresar</a>
        </div>
    </body>
</html>
<script src="Static/js/subir.js"></script>
<script src="Static/js/oscuro.js"></script>
<script src="static/js/carrusel.js"></script>