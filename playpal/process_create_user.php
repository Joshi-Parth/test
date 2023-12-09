
<?php
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
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $home_phone = $_POST['home_phone'];
    $cell_phone = $_POST['cell_phone'];

    $sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) 
            VALUES ('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "User created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();


// \connect fp3ieco1w9y7s3mr@rwo5jst0d7dgy0ri.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ytlvhqnfpy60t0sn --password=s5ka6ul39mobdgw4


// // Get user input from the form
// $first_name = $_POST['first_name'];
// // Get other form fields similarly

// // Insert user data into the database
// $sql = "INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone)
//         VALUES ('$first_name', 'last_name_value', 'email_value', 'home_address_value', 'home_phone_value', 'cell_phone_value')";

// if ($conn->query($sql) === TRUE) {
//     echo "User created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close the database connection
// $conn->close();

?>

<a href="user_section.php"><button type="button">Go Back</button></a>
