<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAJAS</title>
        <script src="https://kit.fontawesome.com/685036d062.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="Static/CSS/compra.css" >
    </head>
    <body>
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
                    <label for="check__menu">
                        <i class="fa-solid fa-bars icon__menu"></i>
                    </label>
                    <nav>
                        <ul>
                            <li><a href="#" id="selected"></a></li>
                            <li><a href="home.php">Nuestra Empresa</a></li>
                            <li><a href="#">Productos</a></li>
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
            <div class="container-fluid">
                <div class="row">
                    <!-- Menú Vertical (Carrito) -->
                    <div class="col-md-3">
                        <div class="menu-vertical">
                            <h3><i class="fa fa-shopping-cart"></i>Carrito</h3>
                            <div class="carrito">
                                <ul id="lista-carrito"></ul>
                            </div>
                            <p id="total-compra">Total: 0 COP</p> <!-- Aquí se mostrará el total -->
                            <button class="btn btn" onclick="finalizarCompra()">Finalizar Compra</button>
                        </div>
                    </div>
                    <!-- Menú de Productos -->
                    <div class="col-md-9">
                        <div class="grid text-center">
                            <h1>Cajas de Archivo</h1>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 mb-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="static/Img/pequeña.jpg" class="card-img-top" height="200">
                                    <div class="card-body">
                                        <h5 class="card-title">Caja X-100</h5>
                                        <p>Descripción del Producto 1</p>
                                        <p>Precio: <span id="precio-caja-x-100">3500</span> COP</p>
                                        <input type="number" id="cantidad-caja-x-100" value="1" min="1" style="width: 60px; margin-bottom: 10px;">
                                        <a href="#" class="btn btn-dark" onclick="addToCart('Caja X-100', document.getElementById('cantidad-caja-x-100').value, 3500)">Agregar al Carrito</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="static/Img/mediana.jpeg" class="card-img-top" height="200">
                                    <div class="card-body">
                                        <h5 class="card-title">Caja X-200</h5>
                                        <p>Descripción del Producto 2</p>
                                        <p>Precio: <span id="precio-caja-x-200">4000</span> COP</p>
                                        <input type="number" id="cantidad-caja-x-200" value="1" min="1" style="width: 60px; margin-bottom: 10px;">
                                        <a href="#" class="btn btn-dark" onclick="addToCart('Caja X-200', document.getElementById('cantidad-caja-x-200').value, 4000)">Agregar al Carrito</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="static/Img/grande.jpeg" class="card-img-top" height="200">
                                    <div class="card-body">
                                        <h5 class="card-title">Caja X-300</h5>
                                        <p>Precio: <span id="precio-caja-x-300">4500</span> COP</p>
                                        <p>Descripción del Producto 3</p>
                                        <input type="number" id="cantidad-caja-x-300" value="1" min="1" style="width: 60px; margin-bottom: 10px;">
                                        <a href="#" class="btn btn-dark" onclick="addToCart('Caja X-300', document.getElementById('cantidad-caja-x-300').value, 4500)">Agregar al Carrito</a>
                                    </div>
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
                        <ul>
                            <li><a href="home.php">Nuestra Empresa</a></li>
                            <li><a href="productos.php">Productos</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="capacitaciones.php">Capacitaciones</a></li>
                            <li><a href="clientes.php">Nuestros Clientes</a></li>
                        </ul>
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
    <script src="static/js/carrusel.js"></script>
    <script src="static/js/comprar.js"></script>
</html>
