<?php

class ConnectDb{
public $connection;
   public function  __construct($config)
    {
        $this->connection=new mysqli($config['host'],$config['userName'],$config['password'],$config['dbName']);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        } else {
//            echo "Connection successful!";
        }
    }

//public function getConnection() {
//    return $this->connection;
//}
public function setQuery($query){

       $data=$this->connection->query($query);
       $data=$data->fetch_all(MYSQLI_ASSOC);
       return $data;
}
}


$config= require './config.php';


//print_r($config);
$db=new ConnectDb($config);
//$con=$db->getConnection();

