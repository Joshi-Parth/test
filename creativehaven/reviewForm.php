<?php include 'pageTracking.php'; ?>
<?php
$servername = "ro2padgkirvcf55m.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "k7s5awqd77n6azmg";
$password = "k1m68lag5a61x4k0";
$dbname = "kbosidshoupyzbp8";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$createReviewsTable = "CREATE TABLE IF NOT EXISTS reviews (
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(255) NOT NULL,
  rating INT NOT NULL,
  comment VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL
);";

if ($conn->query($createReviewsTable) === FALSE) {
  echo "Error creating table: " . $conn->error . "<br>";
  return;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];
    $username = $_POST["username"];

    $sql = "INSERT INTO reviews (product_name, rating, comment, username) VALUES ('$product_name', '$rating', '$comment', '$username')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Review</title>
</head>

<body>
    <h2>Submit a Review</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="product_name">Select Product:</label>
        <select name="product_name" required>
            <option value="Art Supplies">Art Supplies</option>
            <option value="DIY Craft Kits">DIY Craft Kits</option>
            <option value="Workshops and Classes">Workshops and Classes</option>
            <option value="Pottery and Clay Supplies">Pottery and Clay Supplies</option>
            <option value="Custom Prints and Posters">Custom Prints and Posters</option>
            <option value="Stationary and Paper Supplies">Stationary and Paper Supplies</option>
            <option value="Parties and Events">Parties and Events</option>
            <option value="Artisan Crafts">Artisan Crafts</option>
            <option value="Custom Art Framing">Custom Art Framing</option>
            <option value="Art Supply Subscriptions">Art Supply Subscriptions</option>
        </select>

        <br><br>

        <label for="rating">Rating:</label>
        <select name="rating" required>
            <option value="1">1 - Poor</option>
            <option value="2">2 - Fair</option>
            <option value="3">3 - Good</option>
            <option value="4">4 - Very Good</option>
            <option value="5">5 - Excellent</option>
        </select>

        <br><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" rows="4" cols="50" required></textarea>

        <br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <input type="submit" value="Submit Review">
    </form>
</body>

</html>
