<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">    
    <?php include("./includes/header.php")?>
<br>
</head>

<body>

    <div class="container" >
        <div class="mb-3" style="background-image: url('img/banner.jpg'); text-align: center; height: 80px">
            <br>
            <h2 style="color: white; "> FOR YOU</h2>
        </div>
    </div>
    <!--Carrusel Superior-->
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <img src="img/banner4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Fin carrusel Superior-->
    <br>
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-3" >
                    <div class="card" >
                        <img src="img/oferta.jpg" class="card-img-top" alt="..." >
                        <div class="card-body">
                            <h3 class="card-text" style="text-align: center">Ofertas</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="index_register.php" style="text-decoration: none;">
                        <div class="card">
                            <img src="img/carrito.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h3 class="card-text" style="text-align: center">Tus Compras</h3>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-3">
                    <a href="opiniones.php " style="text-decoration: none;">
                        <div class="card">
                            <img src="img/opinion.JPG" class="card-img-top" alt="..." style="height: 75px;">
                            <div class="card-body">
                            <h3 class="card-text" style="text-align: center">Dejanos tu Opinion</h3>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>


    
    <br>

    <div class="container">
        <!-- Imagenes Arriba -->
        <div class="row">
            <div class="col-4">
                
                <div class="card" >
                    <img src="img/mochila1.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 100px">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the .</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                    <div class="card">
                        <img src="img/mochila7.jpg" class="card-img-top" alt="Imagen de la tarjeta">
                            <div class="card-body" style="height: 100px">
                                <h5 class="card-title">Título de la Tarjeta</h5>
                                <p class="card-text">Contenido de la tarjeta. Puedes agregar texto o contenido aquí.</p>
                             </div>
                    </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="img/mochila3.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 100px">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the .</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <br>
    <!--Fin de img arriba--->
    
    <br>


    <!--Imagenes el centro-->
   <div class="container">
        <div class="row">    
                <div class="col-6 border; mb-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/mochila8.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
            
            <div class="col-6 border; mb-3">
            <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/mochila8.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
    
            </div>
        </div> 
    </div>

    <!--Imagenes abajo--->
    
    <div class="container">
       
        <div class="row">
            <div class="col-4">
                
                <div class="card" >
                    <img src="img/mochila5.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 100px">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the .</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                    <div class="card">
                        <img src="img/mochila6.jpg" class="card-img-top" alt="Imagen de la tarjeta">
                            <div class="card-body" style="height: 100px">
                                <h5 class="card-title">Título de la Tarjeta</h5>
                                <p class="card-text">Contenido de la tarjeta. Puedes agregar texto o contenido aquí.</p>
                             </div>
                    </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="img/mochila2.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 100px">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the .</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <br>

<!---->

    <div class="container">
            <div class="card mb-3 mx-auto" style="max-width: 800px;">
            <div class="row g-0">
                
                <div class="col-md-4">
                    <img src="img/descripcion.jpg" class="img-fluid rounded-start" alt="..." style="height: 300px">
                    </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Quiénes Somos ?</h5>
                    <section>
                        <p style="font-family: cursive, sans-serif; text-align: justify">
                            Somos una tienda dedicada a ofrecer la mejor selección de mochilas en Tarija, Bolivia. Nuestra pasión por la aventura y el viaje nos impulsa a proporcionar a nuestros clientes mochilas de alta calidad que sean cómodas, duraderas y funcionales. Desde mochilas para senderismo y camping hasta mochilas urbanas elegantes, tenemos una amplia gama de opciones para satisfacer las necesidades de nuestros clientes.</p>
                        <p style="font-family: cursive, sans-serif; text-align: justify">
                            En nuestra tienda online, nos enorgullece no solo ofrecer productos excepcionales, sino también brindar un excelente servicio al cliente. Nuestro equipo está aquí para ayudarte a encontrar la mochila perfecta para tu próximo viaje o aventura al aire libre. ¡Explora nuestro catálogo y únete a nuestra comunidad de amantes de las mochilas en Tarija!</p>
                    </section>

                    
                </div>
                </div>
            </div>
            </div>
    </div>
            <!---->

    <br>
    <div style="background-color: ">
        <img src="img/redes.png" alt="" style="height: 50px; width: 150px; float: right">
    </div>
    
    <?php include("includes/footer.php")?>


