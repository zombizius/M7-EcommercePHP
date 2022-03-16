<?php

/**
 * 
 */
class pc2Controller extends ClassParentController{
	private $model;
	function __construct()
	{
		
		$this->model = $this->model("LoginModel");
	}

}
?>