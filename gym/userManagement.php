<?php include 'pageTracking.php'; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "Hritik@5400";
$dbname = "gym_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

// Handle User Creation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_user'])) {
    $firstName = $conn->real_escape_string($_POST['first_name']);
    $lastName = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $homeAddress = $conn->real_escape_string($_POST['home_address']);
    $homePhone = $conn->real_escape_string($_POST['home_phone']);
    $cellPhone = $conn->real_escape_string($_POST['cell_phone']);

    $sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) VALUES ('$firstName', '$lastName', '$email', '$homeAddress', '$homePhone', '$cellPhone')";

    if ($conn->query($sql) === TRUE) {
        $message = "New user created successfully.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$searchResult = "";

// Handle User Search
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_user'])) {
    $searchTerm = $conn->real_escape_string($_GET['search']);
    $sql = "SELECT * FROM users WHERE first_name LIKE '%$searchTerm%' 
            OR last_name LIKE '%$searchTerm%' 
            OR email LIKE '%$searchTerm%'
            OR home_phone LIKE '%$searchTerm%'
            OR cell_phone LIKE '%$searchTerm%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $searchResult .= "Name: " . $row["first_name"]. " " . $row["last_name"]. " - Email: " . $row["email"]. " - Home Phone: " . $row["home_phone"]. " - Cell Phone: " . $row["cell_phone"]. "<br>";
        }
    } else {
        $searchResult = "0 results found";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>


    <div class="container mx-auto px-4 sm:px-8 max-w-3xl mt-10">
    <div class="flex flex-wrap -mx-2">
        <!-- Create User Form Section -->
        <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
            <div class="mb-5">
                <h2 class="text-xl font-semibold text-gray-800">Create User</h2>
            </div>
            <form class="bg-white p-5 rounded-lg shadow-sm" action="userManagement.php" method="post">
                <!-- Form Fields -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="first_name">First Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="first_name" type="text" name="first_name" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="last_name">Last Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" type="text" name="last_name" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="email">Email:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="home_address">Home Address:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="home_address" type="text" name="home_address" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="home_phone">Home Phone:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="home_phone" type="tel" name="home_phone">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="cell_phone">Cell Phone:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cell_phone" type="tel" name="cell_phone">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="create_user">
                        Create User
                    </button>
                </div>
            </form>
            <!-- Create User Result Message -->
            <?php if (!empty($message)) { 
                $messageStyle = strpos($message, 'Error') !== false ? "bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" : "bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative";
                echo "<div class='$messageStyle' role='alert'>$message</div>"; 
            } ?>
        </div>

        <!-- Search User Form Section -->
        <div class="w-full md:w-1/2 px-2">
            <div class="mb-5">
                <h2 class="text-xl font-semibold text-gray-800">Search User</h2>
            </div>
            <form class="bg-white p-5 rounded-lg shadow-sm" action="userManagement.php" method="get">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="search">Search:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search" type="text" name="search" required>
                </div>
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="search_user">
                        Search User
                    </button>
                </div>
            </form>
            <!-- Search User Result -->
            <div class="mt-4 p-5 bg-white rounded-lg shadow-sm">
                <?php echo $searchResult; ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>