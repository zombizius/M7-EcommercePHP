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
	<title></title>
	<link rel="stylesheet" href="css/stylesplataforma.css">
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
							<a href="../user/registerView.php"><button class="btn btn-light ms-3">Registrarse</button></a>
							<a href="../user/loginView.php"><button class="btn btn-light ms-3">Iniciar Sesión</button></a>
							<a href="../faqView.php" class="btn btn-light ms-3"><img src="../img/web/interrogante.png"></a>
							<a href="../carritoView.php" class="btn btn-light ms-3"><img src="../img/web/carrito.png"></a>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<main>
			<div class="container">
				<div class="row">				
					<div class="bg-trasparent my-4 p-3" style="position: relative">
						<h1 class="top">Todos Los juegos</h1>
						<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/btf2042View.php">
										<img src="../img/pc/btf2042/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">48€</span>

											<span class="float-end"><a href="../productos/btf2042View.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/btf2042View.php">Battlefield 2042</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/b4bView.php">
										<img src="../img/pc/b4b/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">42€</span>

											<span class="float-end"><a href="../productos/b4bView.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/b4bView.php">Back 4 Blood</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/cyberView.php">
										<img src="../img/pc/cyber/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">20€</span>

											<span class="float-end"><a href="../productos/cyberView.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/cyberView.php">Cyberpunk 2077</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/daysgoneView.php">
										<img src="../img/pc/daysgone/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">16€</span>

											<span class="float-end"><a href="../productos/daysgoneView.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/daysgoneView.php">Days Gone</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/dyinglightView.php">
										<img src="../img/pc/dyinglight/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">7€</span>

											<span class="float-end"><a href="../productos/dyinglightView.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/dyinglightView.php">Dying Light</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/dyinglight2View.php">
										<img src="../img/pc/dyinglight2/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">45€</span>

											<span class="float-end"><a href="../productos/dyinglight2View.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/dyinglight2View.php">Dying Light 2</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/farcry6View.php">
										<img src="../img/pc/farcry6/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">42€</span>

											<span class="float-end"><a href="../productos/farcry6View.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/farcry6View.php">Far Cry 6</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col hp">
								<div class="card h-100 shadow-sm">
									<a href="../productos/fh5View.php">
										<img src="../img/pc/fh5/cover.jpg" class="card-img-top" alt="product.title" />
									</a>
									<div class="card-body">
										<div class="clearfix mb-3">
											<span class="float-start badge rounded-pill bg-success">10€</span>

											<span class="float-end"><a href="../productos/fh5View.php" class="small text-muted text-uppercase aff-link">Info</a></span>
										</div>
										<h5 class="card-title">
											<a href="../productos/fh5View.php">Forza Horizon 5</a>
										</h5>

										<div class="d-grid gap-2 my-4">

											<a href="#" class="btn btn-warning bold-btn">Añadir al Carrito</a>

										</div>
										<div class="clearfix mb-1">

											<span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

											<span class="float-end">
												<i class="far fa-heart" style="cursor: pointer"></i>

											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="navmedio">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item">
											<a class="page-link" href="pcView.php" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										<li class="page-item"><a class="page-link" href="pcView.php">1</a></li>
										<li class="page-item"><a class="page-link" href="pc2View.php">2</a></li>
										<li class="page-item">
											<a class="page-link" href="pc2View.php" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>                                                          
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
									<a href="../indexView.php" class="text-white">Home</a>
								</li>
								<li>
									<a href="../user/registerView.php" class="text-white">Registro</a>
								</li>
								<li>
									<a href="../user/loginView.php" class="text-white">Iniciar Sesión</a>
								</li>
								<li>
									<a href="../carritoView.php" class="text-white">Carrito</a>
								</li>
								<li>
									<a href="../faqView.php" class="text-white">FAQ</a>
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
</html>