<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// Include your database connection logic
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
    $json_data = file_get_contents("php://input");

    // Check if data is not empty
    if (!empty($json_data)) {
        // Decode JSON data
        $data = json_decode($json_data, true); // true for associative array

        // Check if the expected keys exist in the decoded JSON data
        if (isset($data['username'], $data['password'])) {
            $username = $data['username'];
            $password = $data['password'];

            if (empty($username) || empty($password)) {
                echo json_encode(['error' => 'Username and password are required.']);
                http_response_code(400);
                exit();
            }

            $stmt = $conn->prepare("SELECT id, password FROM auth_users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            // $userId = $conn->insert_id;
            $stmt->bind_result($userId, $hashedPassword);

            $stmt->fetch();

            // var_dump($userId, $hashedPassword);

            // $stmt->fetch();
            $stmt->close();

            if (password_verify($password, $hashedPassword)) {
                // $userId = $conn->insert_id;
                echo json_encode(['message' => 'Login successful', 'userId' => $userId]);
                http_response_code(200);
            } else {
                echo json_encode(['error' => 'Invalid username or password']);
                http_response_code(401);
            }
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


