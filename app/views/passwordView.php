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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" href="css/registerView.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="login">
		<h1>¿Olvidaste la contraseña?</h1>
		<div>
		</div>	
		<form action=<?php echo $name ?> method="POST">
			<input type="email" name="email" id="email" placeholder="Correo*" required="required"/>  
			<input type="password" name="password" placeholder="Nueva Contraseña*"/>  
			<input type="password" name="newpassword" placeholder="Confirmar Contraseña*"/>  
			<br>     
			<button type="submit" name="actionSubmit" value="verify" id="verify" class="btn btn-primary btn-block btn-large">Recuperar Contraseña</button>

			

			<?php
			$conn = new mysqli('localhost', 'root', '', 'ecommerceSergi');

			//$actualmail = $_POST['email'];

			$sql = "SELECT * FROM users";
			$query = $conn->query($sql);
			$inc = 4;

			while ($row = $query->fetch_assoc()) {

				$inc = ($inc == 4) ? 1 : $inc + 1;

				if ($inc == 1) echo "<div class='flex-row'>";

				?>
			<a href="mailto:<?php include '../models/MySQLdb.php'; echo $actualmail; ?>?subject=Contrase%C3%B1a%20Actual&body=Estimado%20cliente%2C%0D%0ALe%20recordamos%20que%20su%20actual%20password%20es%3A%0D%0A%0D%0A<?php echo $row['Password']; ?>%0D%0A%0D%0AGracias%20por%20confiar%20en%20nosotros" name="recuperarpassmail" class="btn btn-primary btn-block btn-large">Enviar un correo con mi contraseña</a>

			<!--<button type="submit" name="actionSubmit" value="verify" id="verify" class="btn btn-primary btn-block btn-large">Recuperar Contraseña por Email</button>-->
			<a style="text-decoration: none; color: rgb(58, 252, 255);" href="../">Volver al Inicio</a>
						<?php
		}

		?>

			<a style="text-decoration: none; color: rgb(58, 252, 255);" href="../">Volver al Inicio</a>
		</form>
	</div>
</body>
</html>
