<?php
session_start();

require './model/ConnectDb.php';
//echo "pattabi";

//print_r($config);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $schedule = $_POST['schedule'];
    $password = $_POST['password'];

// Example: Hash the password before storing it in the database
    $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
//echo $hashedPassword;
    $sql="INSERT INTO register (name,email,phone,address,dob,course_name,shedule,password) values ('$name','$email','$phone','$address','$dob','$course','$schedule','$hashedPassword')";
  if($con->query($sql)==true){
      echo "sucess";
      $_SESSION['email']=$email;
      header("Location:./login.php");
  }
  else{
      echo "failed";
  }
}
