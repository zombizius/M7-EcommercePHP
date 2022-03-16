<?php

class MySQLdb 
{

	private $server = "localhost";
	private $database_name = "ecommerceSergi";
	private $username = "root";
	private $password = "";
	private $table_name1 = "users";
	private $table_name2 = "products";
	private $table_name3 = "cart";
	private $connection="";
	private $tableFileds="";

	
	function __construct()
	{
		$this -> createDataBase();

		$this -> connectToServerDataBase();
		$this -> charset();

		$this->defineTableField1();
		$this->createTables($this->table_name1);

		$this->defineTableField2();
		$this->createTables($this->table_name2);

		$this->defineTableField3();
		$this->createTables($this->table_name3);

		$this->insertProducts();
	}

	private function createDataBase(){
		$query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
		$connectionTemp = mysqli_connect($this->server, $this->username, $this->password);
		$ok = mysqli_query($connectionTemp,$query);
		mysqli_close($connectionTemp);
	}
	
	private function connectToServerDataBase(){
		$this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database_name);
		if (mysqli_connect_errno()) die("Connect to data base: NOT OK"); 
		else echo 'Connect to data base :OK';
	}

	private function charset(){
		$ok =mysqli_set_charset($this->connection, "utf8");	 
	}

	private function createTables($table_name){
      //- Crear una table
		$query = "CREATE TABLE IF NOT EXISTS $this->database_name.$table_name($this->tableFileds) ENGINE = MYISAM";
		$ok = mysqli_query($this->connection,$query);

	  /*
MyISAM o InnoDB? Elige motor de almacenamiento MySQLSi:
Si necesitamos transacciones, claves foráneas y bloqueos, tendremos que escoger InnoDB. 
Por el contrario, escogeremos MyISAM en aquellos casos en los que predominen las consultas SELECT a la base de datos.

	  */
}



private function defineTableField1(){
	$this -> tableFileds="
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`Login` varchar(100) NOT NULL,
	`Password` varchar(200) NOT NULL,
	`Email` varchar(200) NOT NULL,
	PRIMARY KEY (`id`)";

}
private function defineTableField2(){
	$this -> tableFileds="
	`id` int(11) NOT NULL AUTO_INCREMENT,		
	`product` varchar(200) NOT NULL,		
	`price` decimal(10,2) NOT NULL,		
	`originalprice` decimal(10,2) NOT NULL,		
	`image` varchar(100) NOT NULL,
	`link` varchar(100) NOT NULL,		
	PRIMARY KEY (`id`)";
}

private function defineTableField3(){
	$this -> tableFileds="
	`id` int(11) NOT NULL AUTO_INCREMENT,		
	`product` varchar(200) NOT NULL,		
	`price` decimal(10,2) NOT NULL,		
	`originalprice` decimal(10,2) NOT NULL,		
	`image` varchar(100) NOT NULL,
	`link` varchar(100) NOT NULL,		
	PRIMARY KEY (`id`)";
}

public function functionVerifyRegister(){
	$Login   = $_POST["username"];
	$Password= $_POST["password"];
	$query = mysqli_query($this->connection, "SELECT * FROM $this->database_name.$this->table_name1 WHERE Login='$Login' AND Password='$Password'");
	$numrows = mysqli_num_rows($query);
	if ($numrows > 0)echo '<br>'."user OK:".$numrows;
	else echo '<br>'."user NO OK";
}
public function functionInsertRegister(){
	$Login = $_POST["username"];
	$Password=$_POST["password"];
	$Email=$_POST["email"];	
	$query = "INSERT INTO `$this->database_name`.`$this->table_name1` (`Login`, `Password`,`Email`) VALUES ('$Login', '$Password', '$Email');";
	$ok= mysqli_query($this->connection, $query);
	if($ok) {
		echo "New record create successfully";
		return true;
	} else {
		echo "New record: Error ";
		return false;
	}
}

 public function agregarcarrito(){
 	$productid = $_POST['idproducto'];
 	$imagelink = $_POST['linkimage'];

 	$query = "INSERT INTO $this->database_name.$this->table_name3 SELECT * FROM $this->database_name.$this->table_name2 WHERE id = '$productid'";

 	$query2 = "UPDATE $this->database_name.$this->table_name3 SET image = '$imagelink' WHERE id = '$productid'";

 	$ok= mysqli_query($this->connection, $query);
 	$ok2= mysqli_query($this->connection, $query2);
 }

 public function borrardelcarrito(){
 	/*$carritoid = $_POST['random'];

 	$query = "DELETE FROM $this->database_name.$this->table_name3 WHERE id = 6";
 	$ok= mysqli_query($this->connection, $query);*/

 	

	//$delete = "DELETE FROM cart WHERE id = $deleteid";



 }

 public function enviarmail(){
 	$Email=$_POST['email'];
 	$Password = "SELECT `Password` FROM $this->database_name.$this->table_name1 WHERE Email ='$Email'"; 

 	/*mail($Email, 'Password Actual', 'Estimado usuario, le recordamos que su password es: '.$Password.'. Gracias por confiar en nosotros');*/

 	$correopass = $_POST['email'];
 	$query = "SELECT Password FROM $this->database_name.$this->table_name1 WHERE Email = '$correopass'";

 }

 public function eliminarUser(){
 	$id = $_GET['id'];
 	$eliminar = "DELETE FROM users WHERE id = '$id'";
 	$resultadoEliminar = mysqli_query($connection, $eliminar);
 	if ($resultadoEliminar){
 		echo ("delete ok");
 	}else{
 		echo ("no ok");

 	}
 }



 public function passwordmail() {
	$mailactual=$_POST['email'];
	$newpass=$_POST['password'];
	$newpass2=$_POST['newpassword'];

	if ($newpass == $newpass2) {
		$query="UPDATE $this->database_name.$this->table_name1 SET Password= '$newpass2' WHERE Email = '$mailactual'";
		$ok= mysqli_query($this->connection, $query);
		if(!$ok)print('<br>'."change: no OK");
		else print('<br>'."Change: OK");
	} else print('Las contraseñas deben ser iguales');		

}

public function functionInsertProducts(){
	/*include '../../views/productos/btf2042View.php';
  $productid = $productID;

  $query = "INSERT INTO `$this->database_name`.`$this->table_name1` (`ProductID`) VALUES ('$productid');";

  $ok= mysqli_query($this->connection, $query);
	if($ok) {
	     echo "New record create successfully";
	     return true;
	} else {
	     echo "New record: Error ";
	     return false;
	   }*/
	 }

	 private function insertProducts(){
	 	$sql = "SELECT * FROM products";
	 	$data = $this->querySelectRow($sql);
	 	if(!$data){
	 		$sql = "INSERT INTO `products` (`id`, `product`, `price`, `originalprice`, `image`, `link`) VALUES
	 		(1, 'Battlefield 2042', '48.00', '50', 'views/img/pc/btf2042/cover.jpg', 'views/productos/btf2042View.php'),
	 		(2, 'Forza Horizon 5', '46.00', '90', 'views/img/pc/fh5/cover.jpg', 'views/productos/fh5View.php'),
	 		(3, 'Back 4 Blood', '42.00', '61', 'views/img/pc/b4b/cover.jpg', 'views/productos/b4bView.php'),
	 		(4, 'Far Cry 6', '42.00',  '60', 'views/img/pc/farcry6/cover.jpg', 'views/productos/farcry6View.php'),
	 		(5, 'Dying Light 2', '45.00', '60', 'views/img/pc/dyinglight2/cover.jpg', 'views/productos/dyinglight2View.php'),
	 		(6, 'Days Gone', '18.00', '50', 'views/img/pc/daysgone/cover.jpg', 'views/productos/daysgoneView.php'),
	 		(7, 'Halo', '49.00', '70', 'views/img/pc/halo/cover.jpg', 'views/productos/HaloView.php'),
	 		(8, 'God Of War', '35.00', '50', 'views/img/pc/god/cover.jpg', 'views/productos/godView.php'),
	 		(9, 'Cyberpunk 2077', '20.00', '59', 'views/img/pc/cyber/cover.jpg', 'views/productos/cyberView.php'),
	 		(10, 'Dying Light', '7', '30', 'views/img/pc/dyinglight/cover.jpg', 'views/productos/dyinglightView.php'),
	 		(11, 'Farming Simulator 2022', '30.00',  '40', 'views/img/pc/farming22/cover.jpg', 'views/productos/farming22View.php'),
	 		(12, 'Grand Theft Auto 5', '9.00', '76', 'views/img/pc/gtav/cover.jpg', 'views/productos/gtavView.php'),
	 		(13, 'No Man Sky', '13.00', '56', 'views/img/pc/noman/cover.jpg', 'views/productos/nomanView.php'),
	 		(14, 'PayDay 2', '3.00', '10', 'views/img/pc/payday2/cover.jpg', 'views/productos/payday2View.php'),
	 		(15, 'Tom Clancy Rainbow Six Siege', '8.00', '20', 'views/img/pc/r6/cover.jpg', 'views/productos/r6View.php'),
	 		(16, 'Watch Dogs Legion', '16.00', '60', 'views/img/pc/watchdogs/cover.jpg', 'views/productos/watchdogsView.php');";
	 		$ok = $this->queryNoSelect($sql);
	 	} else {
	 		$sql = "INSERT INTO `products` (`id`, `product`, `price`, `originalprice`, `image`, `link`) VALUES
	 		(1, 'Battlefield 2042', '48.00', '50', 'views/img/pc/btf2042/cover.jpg', 'views/productos/btf2042View.php'),
	 		(2, 'Forza Horizon 5', '46.00', '90', 'views/img/pc/fh5/cover.jpg', 'views/productos/fh5View.php'),
	 		(3, 'Back 4 Blood', '42.00', '61', 'views/img/pc/b4b/cover.jpg', 'views/productos/b4bView.php'),
	 		(4, 'Far Cry 6', '42.00',  '60', 'views/img/pc/farcry6/cover.jpg', 'views/productos/farcry6View.php'),
	 		(5, 'Dying Light 2', '45.00', '60', 'views/img/pc/dyinglight2/cover.jpg', 'views/productos/dyinglight2View.php'),
	 		(6, 'Days Gone', '18.00', '50', 'views/img/pc/daysgone/cover.jpg', 'views/productos/daysgoneView.php'),
	 		(7, 'Halo', '49.00', '70', 'views/img/pc/halo/cover.jpg', 'views/productos/HaloView.php'),
	 		(8, 'God Of War', '35.00', '50', 'views/img/pc/god/cover.jpg', 'views/productos/godView.php'),
	 		(9, 'Cyberpunk 2077', '20.00', '59', 'views/img/pc/cyber/cover.jpg', 'views/productos/cyberView.php'),
	 		(10, 'Dying Light', '7', '30', 'views/img/pc/dyinglight/cover.jpg', 'views/productos/dyinglightView.php'),
	 		(11, 'Farming Simulator 2022', '30.00',  '40', 'views/img/pc/farming22/cover.jpg', 'views/productos/farming22View.php'),
	 		(12, 'Grand Theft Auto 5', '9.00', '76', 'views/img/pc/gtav/cover.jpg', 'views/productos/gtavView.php'),
	 		(13, 'No Man Sky', '13.00', '56', 'views/img/pc/noman/cover.jpg', 'views/productos/nomanView.php'),
	 		(14, 'PayDay 2', '3.00', '10', 'views/img/pc/payday2/cover.jpg', 'views/productos/payday2View.php'),
	 		(15, 'Tom Clancy Rainbow Six Siege', '8.00', '20', 'views/img/pc/r6/cover.jpg', 'views/productos/r6View.php'),
	 		(16, 'Watch Dogs Legion', '16.00', '60', 'views/img/pc/watchdogs/cover.jpg', 'views/productos/watchdogsView.php');";
	 	}
	 }

	//Query regresa un solo registro en un arreglo asociado
	 function querySelectRow($sql){
	 	$data = array();
	 	$r = mysqli_query($this->connection, $sql);
	 	if($r){
	 		if(mysqli_num_rows($r)>0){
	 			$data = mysqli_fetch_assoc($r);
	 		}
	 	}
	 	return $data;
	 }

	//Query regresa un arreglo asociado
	 function querySelectAll($sql){
	 	$data = array();
	 	$r = mysqli_query($this->connection, $sql);
	 	if($r){
	 		while($row = mysqli_fetch_assoc($r)){
	 			array_push($data, $row);
	 		}
	 	}
	 	return $data;
	 }

	//Query regresa un valor booleano (para INSERT, UPDATE, DELETE)
	 function queryNoSelect($sql){
	 	$r = mysqli_query($this->connection, $sql);
	 	return $r;
	 }

	}
?>