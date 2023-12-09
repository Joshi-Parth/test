<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Enterprise Online Market Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php include 'mainNavbar.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // The API endpoint where we want to send the data
    $api_url = 'https://playpal-77a0c2e5e469.herokuapp.com/signup.php';

    // Collect post variables
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Data to be sent to the API
    $postData = json_encode([
        'username' => $username,
        'email' => $email,
        'password' => $password
    ]);

    // Initialize cURL session
    $ch = curl_init($api_url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($postData)
    ]);

    // Execute the cURL session
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo '<p class="text-center text-red-500">cURL Error: ' . curl_error($ch) . '</p>';
    } else {
        // Handle the response from your API
        $decodedResponse = json_decode($response, true);
        // Check if decoding was successful
        if ($decodedResponse) {
            // Handle the decoded response
            echo '<p class="text-center text-green-500">' . htmlspecialchars($decodedResponse['message'] ?? 'Account created successfully.') . '</p>';
        } else {
            // If decoding fails, use the raw response
            echo '<p class="text-center text-green-500">Success: ' . htmlspecialchars($response) . '</p>';
        }
    }

    // Close cURL session
    curl_close($ch);
}
?>

<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Sign Up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Sign Up
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-green-500 hover:text-green-800" href="login.php">
                    Already have an account?
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>