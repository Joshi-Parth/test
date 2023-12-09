<?php
// Establish database connection
// $conn = new mysqli("eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "d44vzs10mgef3rax", "qk8qwhw00mlw785k", "users", 3306);


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
    $search_query = $_POST['search_query'];

    $sql = "SELECT * FROM users 
            WHERE first_name LIKE '%$search_query%' 
               OR last_name LIKE '%$search_query%' 
               OR email LIKE '%$search_query%' 
               OR home_phone LIKE '%$search_query%' 
               OR cell_phone LIKE '%$search_query%'";

    $result = $conn->query($sql);

    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Search Results</title>
    </head>
    <body>
        <h2>Search Results</h2>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display user information as needed
            echo "<p>Name: {$row['first_name']} {$row['last_name']}</p>";
            echo "<p>Email: {$row['email']}</p>";
            echo "<p>Home Phone: {$row['home_phone']}</p>";
            echo "<p>Cell Phone: {$row['cell_phone']}</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No results found.</p>";
    }
    echo '<a href="user_section.php"><button type="button">Back to User Section</button></a>';
    echo "</body>
    </html>";
    $conn->close();
    exit();
}

// Close the database connection

?>


<!-- <div id="search-results"></div>
<script>
    function searchUsers() {
        var searchQuery = document.getElementsByName('search_query')[0].value;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search-results").innerHTML = this.responseText;
            }
        };

        xhttp.open("GET", "process_search_users.php?search_query=" + encodeURIComponent(searchQuery), true);
        xhttp.send();

        // Prevent form submission
        return false;
    }
</script> -->
