<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <script src="https://kit.fontawesome.com/685036d062.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="Static/CSS/menu.css" >
    </head>
    <body id="inicio">
        <header>
            <div class="header_superior">
                <div class="logo">            
                    <img src="Static/Img/logo.png" alt="">
                </div>
                <h1>GESTION INTEGRAL EN ORGANIZACIÓN DOCUMENTAL</h1> 
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
                            <li><a href="servicios.php">Servicios</a></li>
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
                    <div class="g-col-4"><h1>Nuestra Empresa</h1></div>
                </div>
            </div>
            <div class="gill">
                <div class="card mb-3" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="Static/Img/mision.jpeg" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Misión</h5>
                                <p class="card-text">
                                    Ofrecer soluciones integrales en gestión documental y archivo, mediante la comercialización de insumos especializados, la prestación de servicios de alta calidad y la impartición de cursos formativos. Buscamos apoyar a empresas e instituciones en la organización y preservación eficiente de su información, garantizando un manejo adecuado y accesible de los documentos que son clave para su operativa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="gill">
                    <div class="card mb-3" style="max-width: 900px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Static/Img/vision.jpeg" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Visión</h5>
                                    <p class="card-text">Ser la empresa líder en gestión documental y archivo en el mercado, reconocida por la excelencia en nuestros productos, servicios y formación. Aspiramos a ser el referente en innovación y calidad, contribuyendo al desarrollo de estándares elevados en la conservación y administración de documentos, ayudando a nuestros clientes a maximizar su eficiencia operativa y cumplimiento normativo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>     
            <br>     
            <div class="container text-center hist">
                <div class="row w-auto p-3">
                    <div class="col w-auto p-3">
                        <h4>Reseña Historica</h4>
                        <br>
                        <p class="card-text ">GIO Documental se estableció con el objetivo de transformar la gestión documental en Barranquilla, Colombia. Desde sus inicios como proveedor de insumos para archivo, la empresa ha evolucionado hacia un referente en soluciones integrales de gestión documental, ofreciendo también servicios especializados y cursos de formación.
                            <br>
                            A lo largo de los años, GIO Documental ha crecido significativamente, alcanzando reconocimiento en 2024 y formando alianzas estratégicas que han ampliado su presencia en el mercado. Hoy, la empresa se destaca por su compromiso con la calidad y la innovación, ayudando a empresas e instituciones a optimizar sus procesos de archivo y preservación de información.
                            <br>
                            Con una visión hacia el futuro, GIO Documental sigue adaptándose a las nuevas tendencias y tecnologías, reafirmando su posición como líder en el sector.
                        </p>
                    </div>
                    <div class="col w-auto p-3">
                        <img src="Static/Img/empresa.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>  
        </main>
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
                <div class="g-col-4">
                    <p>&#169;Elaborado por: Stefanny De La Hoz</p>
                    <p>Política y tratamiento de datos Personales</p>
                    <p>Autorización de Tratamiento de Datos Personales</p>
                </div>
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
    <script src="Static/js/subir.js"></script>
    <script src="Static/js/oscuro.js"></script>
</html>

