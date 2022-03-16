<?php 
class xboxModel{
 private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
    $this->db->functionInsertRegister();
 }
}
?>
