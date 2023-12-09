<?php include 'pageTracking.php'; ?>
<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// Establish database connection
// $conn = new mysqli("eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "d44vzs10mgef3rax", "qk8qwhw00mlw785k", "ps63s34s70bkzuwu");

$url = parse_url("mysql://fp3ieco1w9y7s3mr:s5ka6ul39mobdgw4@rwo5jst0d7dgy0ri.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ytlvhqnfpy60t0sn");

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw JSON data from the request body
    $json_data = file_get_contents("php://input");

    // Check if data is not empty
    if (!empty($json_data)) {
        // Decode JSON data
        $data = json_decode($json_data, true); // true for associative array

        // Check if the expected keys exist in the decoded JSON data
        if (isset($data['username'], $data['password'], $data['email'])) {
            $username = $data['username'];
            $password = $data['password'];
            $email = $data['email'];

            // Add your password hashing logic here before storing it in the database
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $conn->prepare("INSERT INTO auth_users (username, password, email) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $hashedPassword, $email);

            if ($stmt->execute()) {
                $userId = $conn->insert_id;
                echo json_encode(['message' => 'Registration successful', 'userId' => $userId]);
                http_response_code(200);
            } else {
                echo json_encode(['error' => 'Registration failed']);
                http_response_code(500);
            }

            $stmt->close();
        } else {
            echo json_encode(['error' => 'Invalid JSON data']);
            http_response_code(400);
        }
    } else {
        echo json_encode(['error' => 'Empty JSON data']);
        http_response_code(400);
    }
}
?>



