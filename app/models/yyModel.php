<?php 
class yyModel{
 private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
    $this->db->functionInsertRegister();
 }
}
?>
