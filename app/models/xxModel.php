<?php 
class xxModel{
 private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
    $this->db->functionVerifyRegister();
}
}

?>
