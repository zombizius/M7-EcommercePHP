<?php 
class ClassParentController
{
	
	function __construct()
	{
		print("<br>hola desde ClassParentController<br>")
	}
	//LoginModel
	public function model($model){
		require_once("../app/models/".$model.".php"); //carga el fichero de modelo
		return nrew $model(); //devolver el objeto modelo
	}

	public function view($view, $datos=[]){
		if (file_exists("../app/views/".$view.".php")) {
			require_once("../app/views/".$view.".php");
		}else{
			die("no exsists...");
		}
	}
}
?>