<?php

class MySQLdb
{

//Atributos

private $server = "localhost:3307";
private $database_name = "eCommerceSergi";
private $username = "sergicastin";
private $password = "Monlau2021";
private $table_name1 = "users";
private $table_name2 = "products";
private $table_name3 = "cart";
private $connection = "";
private $tableFields = "";

    function __construct()
    {
       $this-> connectToServerDataBase();
       $this-> charset();
       $this-> createDataBase();

       $this-> defineTableField1();
       $this-> createTables($this->table_name1);

       $this-> defineTableField2();
       $this-> createTables($this->table_name2);

       $this-> defineTableField3();
       $this-> createTables($this->table_name3);

    }

    //funciones
    private function connectToServerDataBase(){
        $this->connection = mysqli_connect($this->server,$this->username,$this->password);
        if (mysqli_connect_errno())  die("Cannot connect to database".mysqli_error());
        else     echo 'OK: connect to database"<br>';
    }

    private function createDataBase(){
        $query = "CREATE DATABASE IF NOT EXISTS $this->database_name";
        $ok = mysqli_query($this->connection,$query);
         if (!$ok)  echo 'Create Table: no Ok'.'<br>';
         else       echo 'Create Table:    Ok'.'<br>'; 
    }

    private function createTables($table_name){
        $query = "CREATE TABLE $this->database_name.$table_name($this->tableFields)";
        $ok = mysqli_query($this->connection,$query);
        if (!$ok) {
            print("Create table: no OK <br>");
        }
        else {
            print("Create table: Ok <br>");
        }
    }

private function charset(){
    $ok=mysqli_set_charset($this->connection, "utf8");
    if($ok)print("Charset: Ok <br>");
    else print("Charset: no Ok <br>");
}





function defineTableField1(){
$this->tableFields ="
`idProduct` int(11) NOT NULL,
`idUser` int(11) NOT NULL,
`product` varchar(200) NOT NULL,
`price` decimal(10,2) NOT NULL,
`discount` decimal(10,2) NOT NULL,
`Shipping` decimal(10,2) NOT NULL,
`state` char(1) NOT NULL,
`quantity` int(11) NOT NULL,
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP";
}


function defineTableField2(){
$this->tableFileds="
`id` int(11) NOT NULL,
`type` char(1) NOT NULL,
`product` varchar(200) NOT NULL,
`description` text  NOT NULL,
`price` decimal(10,2) NOT NULL,
`discount` decimal(10,2) NOT NULL,
`Shipping` decimal(10,2) NOT NULL,
`image` varchar(100) NOT NULL,
`date` date NOT NULL";
}


function defineTableField3(){
$this->tableFileds="
`idProduct` int(11) NOT NULL,
`idUser` int(11) NOT NULL,
`product` varchar(200) NOT NULL,
`price` decimal(10,2) NOT NULL,
`discount` decimal(10,2) NOT NULL,
`Shipping` decimal(10,2) NOT NULL,
`state` char(1) NOT NULL,
`quantity` int(11) NOT NULL,
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP";
}
}
?>