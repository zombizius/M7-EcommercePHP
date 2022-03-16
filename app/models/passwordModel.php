<?php
class passwordModel{
private $db;
function __construct()
{
$namedb="mysqldb";
require "../Models/".$namedb.".php";
$this->db=new $namedb();
$this->db->passwordmail();
}
}
?>
