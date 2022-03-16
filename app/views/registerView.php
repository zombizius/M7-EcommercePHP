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
	<title>Registrarse</title>
	<link rel="stylesheet" href="css/registerView.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="login">
		<h1>Registrarse</h1>
		<div>
		</div>	
		<form action=<?php echo $name ?> method="POST">
			<input type="text" name="username" placeholder="Usuario*" required="required"/>
			<input type="mail" name="email" placeholder="Correo*" required="required"/>
			<input type="password" name="password" placeholder="Contraseña*" required="required"/>
			<input type="password" name="password1" placeholder="Confirmar Contraseña*" required="required"/>
			<button type="submit" name="actionSubmit" class="btn btn-primary btn-block btn-large">Registrarse</button>
		</form>
		<p id="whitetext">¿Ya tienes una cuenta? <a style="text-decoration: none; color: rgb(58, 252, 255);" href="loginView.php">Inicia sesión aquí</a></p>
		<a style="text-decoration: none; color: rgb(58, 252, 255);" href="../">Volver al Inicio</a>
	</div>
</body>
</html>

