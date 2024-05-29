
<?php session_start();
// echo $_SESSION['email'];
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{
            background-color: #F5DAD2;
        }
    </style>
</head>
<body>

<?php

// echo  $_SESSION['userType'];
require "view/partials/navbar.php" ?>

<div class="grid place-items-center gap-40 mt-40">
    <h1 class="text-center text-lg font-semibold">
        Dear learners, summer courses registration are open now. Please enroll if you haven't enrolled yet.
    </h1>



    <!--    show view course-->
    <?php if($_SESSION['email']) : ?>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <a href="./register.php"> View Course</a>
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </button>
    <?php else: ?>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <a href="register.php"> Register</a>
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </button>
    <?php  endif;?>
<!-- <?php echo $_SESSION['email']; ?> -->
</div>
<script>

    function  logoutFun() {
 window.location.href='logout.php';
    }
</script>
</body>
</html>

