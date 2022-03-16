<?php 
class pc2Model{
 private $db;
  
  function __construct()
  {
    $namedb="mysqldb";
    require "../Models/".$namedb.".php";
    $this->db=new $namedb();
    $this->db->functionInsertRegister();
  }
}
?>