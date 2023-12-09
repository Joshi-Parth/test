<?php include 'pageTracking.php'; ?>
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// include 'db_connection.php';
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

// Retrieve last visits from the database
$query = "SELECT * FROM user_visits ORDER BY visit_timestamp DESC LIMIT 5";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $lastVisits = [];
    while ($row = $result->fetch_assoc()) {
        $lastVisits[] = $row;
    }
    echo json_encode($lastVisits);
} else {
    echo json_encode([]);
}

$conn->close();
?>


<!-- <?php
// marketplace1.php (or any other PHP page)

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

// Fetch last visits from the central server
$lastVisits = json_decode(file_get_contents('http://your-api-endpoint/last-visits'), true);

// Display last visits
if (!empty($lastVisits)) {
    foreach ($lastVisits as $visit) {
        echo "<p>Visited: {$visit['page_visited']} on {$visit['visit_timestamp']}</p>";
    }
} else {
    echo "<p>No last visits available</p>";
}

// Your HTML content for Marketplace 1
?> -->

