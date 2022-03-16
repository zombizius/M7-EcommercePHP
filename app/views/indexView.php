<?php
session_start();
//initialize cart if not set or is unset
/*if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}*/


$user =  !empty($_SESSION["username"]) ? htmlspecialchars($_SESSION["username"]) : 'registrate';



//unset qunatity
unset($_SESSION['qty_array']);

$conn = new mysqli('localhost', 'root', '', 'ecommerceSergi');

$sql = "SELECT * FROM products WHERE id = 1";
$query = $conn->query($sql);
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM products WHERE id = 2";
$query2 = $conn->query($sql2);
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$sql3 = "SELECT * FROM products WHERE id = 3";
$query3 = $conn->query($sql3);
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);

$sql4 = "SELECT * FROM products WHERE id = 4";
$query4 = $conn->query($sql4);
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);

$sql5 = "SELECT * FROM products WHERE id = 5";
$query5 = $conn->query($sql5);
$result5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_assoc($result5);

$sql6 = "SELECT * FROM products WHERE id = 6";
$query6 = $conn->query($sql6);
$result6 = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_assoc($result6);

$sql7 = "SELECT * FROM products WHERE id = 7";
$query7 = $conn->query($sql7);
$result7 = mysqli_query($conn, $sql7);
$row7 = mysqli_fetch_assoc($result7);

$sql8 = "SELECT * FROM products WHERE id = 8";
$query8 = $conn->query($sql8);
$result8 = mysqli_query($conn, $sql8);
$row8 = mysqli_fetch_assoc($result8);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ecommerce Sergi Castillo</title>
	<link rel="stylesheet" href="views/css/styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</head>
<body>
	<div class="container-fluid">
		<header>
			<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
				<div class="container-fluid">
					<a class="navbar-brand" href=""><img src="views/img/web/logo.png" alt="Logo" class="img-fluid" /></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link active" href="">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="views/plataformas/pcView.php">PC</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="views/plataformas/psView.php">PlayStation</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="views/plataformas/xboxView.php">Xbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="views/adminView.php">Gestión</a>
							</li>																			
						</ul>						
						<form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
							<button class="btn btn-outline-success" id="buscar" type="submit">Buscar</button>
						</form>
						
						<div class="d-flex">
							<?php if ((isset($_SESSION["loggedin"]))) : ?>
							<ul class="navbar-nav mx-auto">
								<li class="nav-item">
									<a class="nav-link" href="views/adminView.php">Bienvenido <?php echo $user; ?></a>
								</li>
							</ul>
							<?php endif ?>

							<?php if ((!isset($_SESSION["loggedin"]))) : ?>
								<ul class="navbar-nav mx-auto">
								<li class="nav-item">
									<a class="nav-link" href="views/loginView.php">Para acceder al menú inicie sesión</a>
								</li>
							</ul>

							<?php endif ?>	
							<a href="views/registerView.php"><button class="btn btn-light ms-3">Registrarse</button></a>
							<a href="views/loginView.php"><button class="btn btn-light ms-3">Iniciar Sesión</button></a>
							<a href="views/plataformas/faqView.php" class="btn btn-light ms-3"><img src="views/img/web/interrogante.png"></a>
							<a href="views/carritoView.php" class="btn btn-light ms-3"><img src="views/img/web/carrito.png"></a>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<main>

			<div class="row">
				<div class="col-12 top"></div>			
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div id="slidermenu">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a href=""><img src="views/img/mainslider/slider2.jpg" class="d-block w-100" alt="FORZAHORIZON5"></a>
								<div class="carousel-caption d-none d-md-block">
									<h5 class="h5carousel"></h5>							
								</div>
							</div>
							<div class="carousel-item">
								<a href=""></a><img src="views/img/mainslider/slider3.jpg" class="d-block w-100" alt="CYBERPUNK2077"></a>
								<div class="carousel-caption d-none d-md-block">
									<h5 class="h5carousel"></h5>							
								</div>
							</div>
							<div class="carousel-item">
								<a href=""></a><img src="views/img/mainslider/slider4.png" class="d-block w-100" alt="WATCHDOGSLEGION"></a>
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

			<div class="row">
				<div class="col-12">	
					<h1 id="masvendidos">Más Vendidos</h1>				
				</div>			
			</div>

			<div class="row left">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row['link']; ?>"><img src="<?php print $row['image']; ?>" alt="<?php echo $row['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row['price']; ?></ins> <del><?php echo $row['originalprice']; ?></del>
						</div>	
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row2['link']; ?>"><img src="<?php print $row2['image']; ?>" alt="<?php echo $row2['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row2['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row2['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row2['price']; ?></ins> <del><?php echo $row2['originalprice']; ?></del>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row3['link']; ?>"><img src="<?php print $row3['image']; ?>" alt="<?php echo $row3['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row3['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row3['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row3['price']; ?></ins> <del><?php echo $row3['originalprice']; ?></del>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row4['link']; ?>"><img src="<?php print $row4['image']; ?>" alt="<?php echo $row4['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row4['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row4['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row4['price']; ?></ins> <del><?php echo $row4['originalprice']; ?></del>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-12">	
						<h1 id="lanzamientos">Próximos Lanzamientos</h1>				
					</div>			
				</div>

				<div class="row" style="margin-bottom: 2.5%;">
					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row5['link']; ?>"><img src="<?php print $row5['image']; ?>" alt="<?php echo $row5['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row5['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row5['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row5['price']; ?></ins> <del><?php echo $row5['originalprice']; ?></del>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row6['link']; ?>"><img src="<?php print $row6['image']; ?>" alt="<?php echo $row6['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row6['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row6['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row6['price']; ?></ins> <del><?php echo $row6['originalprice']; ?></del>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row7['link']; ?>"><img src="<?php print $row7['image']; ?>" alt="<?php echo $row7['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row7['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row7['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row7['price']; ?></ins> <del><?php echo $row7['originalprice']; ?></del>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-2 center mainimagen">					
						<a href="<?php echo $row8['link']; ?>"><img src="<?php print $row8['image']; ?>" alt="<?php echo $row8['product']; ?>"></a>
						<h2><a class="tituloproducto"><?php echo $row8['product']; ?></a></h2>
						<a href="#" class="subtituloproducto">Añadir al Carrito</a>
						<a href="<?php echo $row8['link']; ?>" class="subtituloproducto">Ver Detalles</a><br>	
						<div class="center">
							<ins><?php echo $row8['price']; ?></ins> <del><?php echo $row8['originalprice']; ?></del>
						</div>
					</div>
				</div>
			</div>
		</main>

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
									<a href="" class="text-white">Home</a>
								</li>
								<li>
									<a href="views/registerView.php" class="text-white">Registro</a>
								</li>
								<li>
									<a href="views/loginView.php" class="text-white">Iniciar Sesión</a>
								</li>
								<li>
									<a href="views/carritoView.php" class="text-white">Carrito</a>
								</li>
								<li>
									<a href="views/plataformas/faqView.php" class="text-white">FAQ</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
							<h5 class="text-uppercase">PC</h5>

							<ul class="list-unstyled mb-0">
								<li>
									<a href="views/plataformas/pcView.php" class="text-white">Acción</a>
								</li>
								<li>
									<a href="views/plataformas/pcView.php" class="text-white">Mundo Abierto</a>
								</li>
								<li>
									<a href="views/plataformas/pcView.php" class="text-white">Carreras</a>
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
</html>