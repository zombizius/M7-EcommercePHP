<?php   
error_reporting(0);
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: /Index.php");
    exit;
}


  $name=basename(__FILE__); 
  if(isset($_POST['actionSubmit'])){
      $nameController=str_replace("View","Controller",$name);   
      require("../Controllers/".$nameController);
      $nameClass=str_replace(".php","",$nameController);   
      $c = new $nameClass();
    }else{
      //$name="Views/".$name;
    }

    if(crypt($pass, $Password) == $Password)
    {
        $_SESSION['logueado']=1;
        $_SESSION['Login']=$_POST['Login'];   

        $origen= ('../');

        header('location:'.$origen);
        echo("Funciona");
    }
    else{   
        header('location:'.$origen);        
        }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="css/loginView.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="login">
		<h1>Iniciar Sesión</h1>
	<form action=<?php echo $name ?> method="POST">
		<input type="text" name="username" placeholder="Usuario" required="required" />
        <input type="password" name="password" placeholder="Contraseña" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="actionSubmit">Iniciar Sesión</button>
	</form>
	<a href="passwordView.php"><p style="text-decoration: none; color: rgb(58, 252, 255);">He olvidado mi contraseña</p></a>
	<p id="whitetext">¿Eres nuevo? <a style="text-decoration: none; color: rgb(58, 252, 255);" href="registerView.php">¡Regístrate aquí!</a></p>
	<a style="text-decoration: none; color: rgb(58, 252, 255);" href="../">Volver al Inicio</a>
	</div>
</body>
</html>

