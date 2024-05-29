<?php
session_start();
require "./model/ConnectDb.php";
if(!empty($_POST)){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM register WHERE email='$email'";
    $getData=$db->setQuery($sql);

    // Store the cipher method
$ciphering = "AES-128-CTR";
    // Non-NULL Initialization Vector for decryption
$decryption_iv = '1234590006';

// Store the decryption key
$decryption_key = "pattabi";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($getData[0]['password'], $ciphering, 
		$decryption_key, $options, $decryption_iv);

echo $decryption;
echo $password;

    if(empty($getData)){
       echo "<script>alert('Please enter a valid data')</script>";
   }

   else if($decryption==$password){
    if($getData[0]['role']=='admin'){

                    $_SESSION['userType']=  $getData[0]['role'];
                }
                $_SESSION['email']=$email;
        
        //        echo $getData[0]['role'];
               header("Location:./home.php");
   }



//...........................Password verify method use............//

//    elseif (password_verify($password,$getData[0]['password'])){
//         if($getData[0]['role']=='admin'){

//             $_SESSION['userType']=  $getData[0]['role'];
//         }
//         $_SESSION['email']=$email;

// //        echo $getData[0]['role'];
//     //    header("Location:./home.php");
//    }

}
