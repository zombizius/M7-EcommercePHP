<?php   
  $name=basename(__FILE__); 
  if(isset($_POST['actionSubmit'])){
      $nameController=str_replace("View","Controller",$name);   
      require("../Controllers/".$nameController);
      $nameClass=str_replace(".php","",$nameController);   
      $c = new $nameClass();
    }else{
      $name="Views/".$name;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>No Man's Sky</title>
    <link rel="stylesheet" href="../productos/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../img/web/logo.png" alt="Logo" class="img-fluid" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../../">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../plataformas/pcView.php">PC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../plataformas/psView.php">PlayStation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../plataformas/xboxView.php">Xbox</a>
                            </li>                           
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" id="buscar" type="submit">Buscar</button>
                        </form>
                        <div class="d-flex">
                         <a href="../registerView.php"><button class="btn btn-light ms-3">Registrarse</button></a>
                         <a href="../loginView.php"><button class="btn btn-light ms-3">Iniciar Sesión</button></a>
                         <a href="../plataformas/faqView.php" class="btn btn-light ms-3"><img src="../img/web/interrogante.png"></a>
                         <a href="../carritoView.php" class="btn btn-light ms-3"><img src="../img/web/carrito.png"></a>
                     </div>
                 </div>
             </div>
         </nav>
     </header>
     <div class="container-fluid">
        <main class="top" id="noman">	
         <div class="container">
             <div class="row top bottom left">

               <div class="col-12 col-sm-12 col-md-4 col-lg-4 cover">
                  <img src="../img/pc/noman/cover.jpg" class="coverimg" alt="cover">
              </div>

              <div class="col-8" id="info">
                  <h1>No Man's Sky</h1>	
                  <div class="subinfos">
                    <div class="download">
                        <img src="https://s3.gaming-cdn.com/themes/igv1/modules/product/images/ticked2.png">En stock
                    </div>
                    <div class="download">
                        <img src="https://s3.gaming-cdn.com/themes/igv1/modules/product/images/ticked2.png">Descarga inmediata
                    </div>
                </div>																	
                <p class="pwarning topmain">¡Quedan 357 en stock!</p>
                <h1 class="precio">15€</h1>
                <button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir al Carrito</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Producto añadido al Carrito</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Ver la Cesta o Seguir Comprando?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" >Ver la Cesta</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Seguir comprando</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>		
        </div>            

        <div class="row left carousel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">                    
                <div id="slidermenu">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href=""><img src="../img/pc/noman/slider1.jpg" class="d-block w-100" alt="Slider1"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5carousel"></h5>							
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href=""></a><img src="../img/pc/noman/slider2.jpg" class="d-block w-100" alt="Slider2"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5carousel"></h5>							
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href=""></a><img src="../img/pc/noman/slider3.jpg" class="d-block w-100" alt="Slider3"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5carousel"></h5>							
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>        
        </div>
        <br>                   		
    </div>	
</main>
</div>

<footer class="bg-dark text-center text-white">
    <div class="container p-4">
        <section class="">
            <form action="">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Suscríbete a nuestro Newlester</strong>
                        </p>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label" for="form5Example21">Correo Electrónico</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </section>    
        <section class="">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Navegación</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="../../" class="text-white">Home</a>
                        </li>
                        <li>
                            <a href="../registerView.php" class="text-white">Registro</a>
                        </li>
                        <li>
                            <a href="../loginView.php" class="text-white">Iniciar Sesión</a>
                        </li>
                        <li>
                            <a href="../carritoView.php" class="text-white">Carrito</a>
                        </li>
                        <li>
                            <a href="../plataformas/faqView.php" class="text-white">FAQ</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">PC</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="../plataformas/pcView.php" class="text-white">Acción</a>
                        </li>
                        <li>
                            <a href="../plataformas/pcView.php" class="text-white">Mundo Abierto</a>
                        </li>
                        <li>
                            <a href="../plataformas/pcView.php" class="text-white">Carreras</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">PlayStation</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Xbox</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Coming Soon</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="mailto:sergicastin@monlau.com">Sergi Castillo - sergicastillo@hotmail.es</a>
    </div>
</footer>
</div>
</body>
<script src="acordion.js"></script>
</html>