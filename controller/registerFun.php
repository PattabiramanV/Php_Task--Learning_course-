<?php
session_start();

require './model/ConnectDb.php';
//echo "pattabi";

//print_r($config);

if (!empty($_POST)) {
    print_r($_POST);
       echo "<script> alert('Delete successfully')</script>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $schedule = $_POST['schedule'];
    $password = $_POST['password'];


// Store the cipher method
$ciphering = "AES-128-CTR";

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234590006';

// Store the encryption key
$encryption_key = "pattabi";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($password, $ciphering,
			$encryption_key, $options, $encryption_iv);
echo $encryption;
//....................hash method......................................//

// Example: Hash the password before storing it in the database
    // $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
//echo $hashedPassword;
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        echo $id;
        echo $name;
        $sql = "UPDATE register 
        SET name = '$name', email = '$email', phone = '$phone', address = '$address', dob = '$dob', 
            course_name = '$course', shedule = '$schedule', password = '$encryption' 
        WHERE id = $id;";

//       $demo=$db->connection->query($sql);
//       echo $demo;
       if($db->connection->query($sql)==true){

              echo "<script> alert('Edit Data successfully')</script>";

           header("Location:../userListing.php");

       }
    }

    else{

        $sql="INSERT INTO register (name,email,phone,address,dob,course_name,shedule,password) values ('$name','$email','$phone','$address','$dob','$course','$schedule','$encryption')  ";
        if($db->connection->query($sql)==true){
            echo "sucess";
            $_SESSION['email']=$email;
            header("Location:./login.php");
        }
        else{
            echo "failed";
        }

    }

}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $editData=$db->setQuery("SELECT * FROM register where id=$id");

       // Store the cipher method
$ciphering = "AES-128-CTR";
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234590006';

// Store the decryption key
$decryption_key = "pattabi";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($editData[0]['password'], $ciphering, 
    $decryption_key, $options, $decryption_iv);
    $editData[0]['password']=$decryption;
}