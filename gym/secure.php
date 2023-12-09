<?php include 'pageTracking.php'; ?>

<?php
    $users = ["Hrithik Bagane", "Richard Sinn", "Alex Bington"];
    $loggedIn = false;
    $message = "";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check for the admin credentials
        if($username === 'admin' && $password === 'admin') {
            $loggedIn = true;
        } else {
            $message = 'Invalid credentials!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen font-sans">

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3 bg-white p-6 rounded-lg shadow-md">

        <?php if(!$loggedIn): ?>
        <h1 class="text-xl font-semibold mb-5">Administrator Login</h1>

        <?php if($message): ?>
        <p class="text-red-500 mb-4"><?= $message ?></p>
        <?php endif; ?>

        <form action="secure.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required class="mt-2 p-2 w-full rounded-md border border-gray-300">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required class="mt-2 p-2 w-full rounded-md border border-gray-300">
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white p-2 rounded-md hover:bg-blue-600">Login</button>
            </div>
        </form>

        <?php else: ?>

        <h1 class="text-xl font-semibold mb-5">Current Users</h1>

        <ul class="list-disc pl-5">
            <?php foreach($users as $user): ?>
            <li><?= $user ?></li>
            <?php endforeach; ?>
        </ul>

        <?php endif; ?>

    </div>
</div>

</body>
</html>