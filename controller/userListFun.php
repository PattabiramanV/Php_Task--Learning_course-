<?php

require "./model/ConnectDb.php";
$getData=$db->setQuery("SELECT * FROM register");

if(isset($_GET['delId'])){
    $userId=$_GET['delId'];
   $db->connection->query("DELETE FROM register where id=$userId ");

//   echo "<script> alert('Delete successfully')</script>";
}
?>