<!-- Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <!-- ... other navbar content ... -->
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3">
                <?php if (!isset($_COOKIE['user_tracking'])): ?>
                    <!-- Show these links only if the user is not logged in -->
                    <a href="./login.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Login</a>
                    <a href="./signup.php" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
                <?php else: ?>
                    <!-- Show this link only if the user is logged in -->
                    <a href="./logout.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Logout</a>
                <?php endif; ?>
            </div>
            <!-- Mobile menu button -->
            <!-- ... mobile menu button content ... -->
        </div>
    </div>
    <!-- Mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <?php if (!isset($_COOKIE['user_tracking'])): ?>
                <!-- Show these links only if the user is not logged in -->
                <li><a href="login.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Login</a></li>
                <li><a href="signup.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Sign Up</a></li>
            <?php else: ?>
                <!-- Show this link only if the user is logged in -->
                <li><a href="logout.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Logout</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<!-- Script for the mobile menu -->
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>