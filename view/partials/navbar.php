<nav class="bg-yellow-800"> <!-- Light brown background color -->
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Centered text -->
            <div class="absolute inset-y-0 left-1/2 transform -translate-x-1/2 flex items-center justify-center">
                <span class="text-white text-lg font-bold">Anna University</span>
            </div>
            <!-- Login button -->
            <?php if($_SESSION['email']) : ?>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                <button class="bg-blue-500 text-white px-3 py-2 rounded-md" onclick="logoutFun()">Logout</button>
            </div>

            <?php else: ?>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                <button class="bg-blue-500 text-white px-3 py-2 rounded-md " >Login</button>
            </div>

            <?php endif; ?>

        </div>
    </div>
</nav>

<script>

    function  logoutFun() {
  <?php  session_destroy(); ?>
    }
</script>