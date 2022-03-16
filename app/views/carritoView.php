<?php
$name=basename(__FILE__);
if(isset($_POST['actionSubmit'])){
	$nameController=str_replace("View","Controller",$name);
	require("../Controllers/".$nameController);
	$nameClass=str_replace(".php","",$nameController);
	$c = new $nameClass();
}else{
	//$name="Views/".$name;
}



 //unset qunatity
unset($_SESSION['qty_array']);

$conn = new mysqli('localhost', 'root', '', 'ecommerceSergi');

$sql = "SELECT SUM(price) as 'total' FROM cart";
$query= $conn->query($sql);
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carrito</title>
	<link rel="stylesheet" href="css/carrito.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</head>
<body onload="randomid()">
	<div class="container-fluid">
		<header>
			<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
				<div class="container-fluid">
					<a class="navbar-brand" href="../"><img src="img/web/logo.png" alt="Logo" class="img-fluid" /></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link active" href="../">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="plataformas/pcView.php">PC</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="plataformas/psView.php">PlayStation</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="plataformas/xboxView.php">Xbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="adminView.php">Gestión</a>
							</li>							
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
							<button class="btn btn-outline-success" id="buscar" type="submit">Buscar</button>
						</form>
						
						<div class="d-flex">
							
							<a href="registerView.php"><button class="btn btn-light ms-3">Registrarse</button></a>
							<a href="loginView.php"><button class="btn btn-light ms-3">Iniciar Sesión</button></a>
							<a href="plataformas/faqView.php" class="btn btn-light ms-3"><img src="img/web/interrogante.png"></a>
							<a href="carritoView.php" class="btn btn-light ms-3"><img src="img/web/carrito.png"></a>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<main>
			<div style="padding-top: 7%;"></div>
			<div id="all">
				<div id="content">
					<div class="container">
						<div class="row">
							<div id="basket" class="col-lg-9">
								<div class="box">
									<form>
										<h1>Carrito</h1>
										<p class="text-muted">Actualmente tienes [insertar cantidad] juegos en el carrito.</p>
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th colspan="2">Nombre</th>
														<th>Cantidad</th>
														<th>Precio</th>
														<th>Precio Original</th>	
														<th></th>													
														<th colspan="2">Eliminar</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php 

														$conn = new mysqli('localhost', 'root', '', 'ecommerceSergi');														
														$sql = "SELECT * FROM cart";
														$query = $conn->query($sql);
														$inc = 4;
														while ($row = $query->fetch_assoc()) {

															$inc = ($inc == 4) ? 1 : $inc + 1;

															if ($inc == 1) echo "<div class='flex-row'>";
															

															?>
															<td><a href="#"><img src="<?php echo $row['image']; ?>" alt="<?php echo $row['product']; ?>"></a></td>
															<td><a href="#"><?php echo $row['product']; ?></a></td>
															<td>
																<input type="number" value="1" disabled="true" class="form-control">
															</td>
															<td><?php echo $row['price']; ?>€</td>
															<td><?php echo $row['originalprice']; ?>€</td>
															<form action=<?php echo $name ?> method="POST">
																<td><input style="display: block;" type="number" disabled="true" value="<?php echo $row['id']; ?>" name="idcarrito" id="idcarrito"></td>																		
																<td><input style="border: 0; background-color: white;" type="submit" name="actionSubmit" value="x" id="Verify"></td>
															</form>
														</tr>
													</tbody>
													<?php
												}
												?>
												<tfoot>
													<tr>
														<?php 

														unset($_SESSION['qty_array']);

														$conn = new mysqli('localhost', 'root', '', 'ecommerceSergi');
														$sql = "SELECT SUM(price) as 'total' FROM cart";
														$query= $conn->query($sql);
														$result = mysqli_query($conn, $sql);
														$row = mysqli_fetch_assoc($result);		

														$original = "SELECT SUM(originalprice) as 'totaloriginal' FROM cart";
														$originalint = (int) 'totaloriginal';
														$sqlint = (int) $sql;

														$resultado = $originalint - $sqlint;	



														?>

														<th colspan="5">Total</th>
														<th colspan="2"><?php echo $row['total']; ?>€</th>
													</tr>
												</tfoot>
											</table>
										</div>

										<div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
											<div class="left"><a href="category.html" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continuar Comprando</a></div>
											<div class="right">
												<button type="submit" class="btn btn-primary">Proceder al Pago<i class="fa fa-chevron-right"></i></button>
												<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
													<input type="hidden" name="cmd" value="_s-xclick">
													<input type="hidden" name="hosted_button_id" value="BMWNZQXTR6WJE">
													<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
													<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
													</form>-->
											</div>

										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-3">
								<div id="order-summary" class="box">
									<div class="box-header">
										<h3 class="mb-0">Pedido:</h3>
									</div>
									<p class="text-muted">Resumen de tu pedido:</p>
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>Total Ahorrado</td>
													<th><?php echo $resultado; ?>€</th>
												</tr>
												<tr>
													<td>Descuento con el cupón</td>
													<th>0.00€</th>
												</tr>
												<tr>
													<td>IVA</td>
													<th>21%</th>
												</tr>
												<tr class="total">
													<td>Total del pedido</td>
													<th><?php echo $row['total']; ?>€</th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="box">
									<div class="box-header">
										<h4 class="mb-0">Cupón de Descuento</h4>
									</div>
									<p class="text-muted">Si dispone de un cupón de descuento introdúzcalo en el cuadro a continuación. </p>
									<form>
										<div class="input-group">
											<input type="text" class="form-control"><span class="input-group-append">
												<button type="button" class="btn btn-primary">Aplicar<i class="fa fa-gift"></i></button></span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="padding-bottom: 5%;"></div>
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
										<a href="registerView.php" class="text-white">Registro</a>
									</li>
									<li>
										<a href="loginView.php" class="text-white">Iniciar Sesión</a>
									</li>
									<li>
										<a href="carritoView.php" class="text-white">Carrito</a>
									</li>
									<li>
										<a href="plataformas/faqView.php" class="text-white">FAQ</a>
									</li>
								</ul>
							</div>

							<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
								<h5 class="text-uppercase">PC</h5>

								<ul class="list-unstyled mb-0">
									<li>
										<a href="plataformas/pcView.php" class="text-white">Acción</a>
									</li>
									<li>
										<a href="plataformas/pcView.php" class="text-white">Mundo Abierto</a>
									</li>
									<li>
										<a href="plataformas/pcView.php" class="text-white">Carreras</a>
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
	<script src="js/carrito.js" type="text/javascript" charset="utf-8" async defer></script>
	</html>