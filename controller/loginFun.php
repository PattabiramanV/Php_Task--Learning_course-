<?php

require "./model/ConnectDb.php";
if(!empty($_POST)){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM register WHERE email='$email'";
    $getData=$db->setQuery($sql);
    if(empty($getData)){
       echo "<script>alert('Please enter a valid data')</script>";
   }
   elseif (password_verify($password,$getData[0]['password'])){
       header("Location:./home.php");
   }

}
