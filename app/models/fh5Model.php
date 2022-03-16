<?php
class fh5Model{
private $db;
function __construct()
{
$namedb="mysqldb";
require "../../Models/".$namedb.".php";
$this->db=new $namedb();
$this->db->agregarcarrito();
}
}
?>