<nav class="bg-yellow-800"> <!-- Light brown background color -->
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Centered text -->
            <div class="absolute inset-y-0 left-1/2 transform -translate-x-1/2 flex items-center justify-center">
                <span class="text-white text-lg font-bold"><a href="./home.php">Anna University</a></span>
            </div>

            <!-- Links on the left -->
          <?php if($_SESSION['userType']) : ?>
            <div class="absolute inset-y-0 left-0 flex items-center space-x-4">
                <a href="./userListing.php" class="text-white hover:text-yellow-400">Userlist</a>
            
                <!-- Add more links here if needed -->
            </div>
            <?php endif; ?>

            <!-- Login/Logout button -->
            <?php if($_SESSION['email']) : ?>
                <form action="">
                <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                    <button class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600" onclick="logoutFun()" >Logout</button>
                </div>
                </form>
            <?php else: ?>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                    <button class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600"><a href="../login.php">Login</a></button>
                </div>
            <?php endif; ?>

        </div>
    </div>
</nav>




