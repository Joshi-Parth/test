<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enterprise Online Market Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<?php include 'mainNavbar.php'; ?>

<!-- Content -->
<div class="container mx-auto px-4">
    <h1 class="text-center text-4xl font-bold text-gray-800 my-10">
        Welcome to the Enterprise Online Market Place
    </h1>

    <div class="flex justify-center space-x-4">
        <!-- Buttons for the different websites -->
        <a href="gym/index.php" class="px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            <button>Visit FlexiFit</button>
        </a>
        
        <a href="playpal/index.php" class="px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
            <button>Visit Playpal</button>
        </a>

        <a href="creativehaven/index.php" class="px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-600">
            <button>Visit Creative Haven</button>
        </a>

        <a href="topfive.php" class="px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            <button>TOP 5</button>
        </a>

        <a href="./userTracking.php" class="px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-orange-500 hover:bg-orange-500">
            <button>User Tracking</button>
        </a>
    </div>

</div>

</body>
</html>
