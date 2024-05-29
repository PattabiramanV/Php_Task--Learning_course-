<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body class="bg-gray-100">
<?php
 session_start();
 require "view/partials/navbar.php"
  ?>
<?php  require "./controller/registerFun.php";
//print_r();
?>

<div class="flex items-center justify-center min-h-screen  mt-10">
<div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full ">
    <h1 class="text-center text-2xl font-bold mb-4">
        Dear learners, summer courses registration are open now.
    </h1>
    <p class="text-center mb-8">
        Please fill out the form below to enroll in a course.
    </p>
    <form action="" method="post">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="name" name="name" value="<?php echo $editData[0]['name'];?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $editData[0]['email'];?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $editData[0]['phone'];?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $editData[0]['address'];?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input type="date" id="dob" name="dob"  value="<?php echo $editData[0]['dob'];?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
            <select id="course" name="course" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="" disabled>Select a course</option>
                <option value="course1" <?php if($editData[0]['course_name'] == 'course1') echo 'selected'; ?>>Course 1</option>
                <option value="course2" <?php if($editData[0]['course_name'] == 'course2') echo 'selected'; ?>>Course 2</option>
                <option value="course3" <?php if($editData[0]['course_name'] == 'course3') echo 'selected'; ?>>Course 3</option>
            </select>

        </div>
        <div class="mb-4">
            <label for="schedule" class="block text-sm font-medium text-gray-700">Preferred Schedule</label>
            <select id="schedule" name="schedule" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="" disabled selected>Select a schedule</option>
                <option value="morning" <?php if($editData[0]['shedule']=='morning') echo 'selected'?>>Morning</option>
                <option value="afternoon" <?php if($editData[0]['shedule']=='afternoon') echo 'selected' ?>>Afternoon</option>
                <option value="evening" <?php if($editData[0]['shedule']=='evening') echo 'selected'?> >Evening</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" value="<?php echo $editData[0]['password'];?>" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        <?php if (isset($_GET['id'])) :?>
        <div class="flex items-center justify-between">
            <button onclick="registerFun()" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               <a href="">Update</a>
            </button>
        </div>
        <?php else: ?>
        <div class="flex items-center justify-between">
            <button onclick="registerFun()" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <a href="">Register Now</a>
            </button>
        </div>
        <?php endif; ?>
    </form>
</div>
</div>

</body>
</html>




<?php
// Store a string into the variable which
// need to be Encrypted
$simple_string = "Welcome to GeeksforGeeks\n";

// Display the original string
echo "Original String: " . $simple_string."<br>";

// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// echo $iv_length;
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234590006';

// Store the encryption key
$encryption_key = "pattabi";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);

// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n"."<br>";

// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234590006';

// Store the decryption key
$decryption_key = "pattabi";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, 
		$decryption_key, $options, $decryption_iv);

// Display the decrypted string
echo "Decrypted String: " . $decryption."<br>";

?>
