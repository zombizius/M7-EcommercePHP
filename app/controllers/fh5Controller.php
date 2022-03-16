<?php
class fh5Controller {
private $model;
function __construct(){ $this->functionLoadModel(); }
public function functionLoadModel(){
$nameModel=str_replace("Controller","Model", basename(__FILE__));
require('../../Models/'. $nameModel);
$nameModel=str_replace(".php", "", $nameModel);
$m=new $nameModel();
}
}
?>