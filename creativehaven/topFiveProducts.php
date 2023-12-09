<?php include 'pageTracking.php'; ?>
<?php

function getTopRatedProducts($conn)
{
    $query = "SELECT product_name, AVG(rating) as avg_rating 
              FROM reviews 
              GROUP BY product_name 
              ORDER BY avg_rating DESC 
              LIMIT 5";
    
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function displayTopRatedProducts($topRatedProducts)
{
    echo "<h2>Top 5 Rated Products</h2>";
    echo "<ul>";
    
    foreach ($topRatedProducts as $product) {
        echo "<li>{$product['product_name']} - Average Rating: {$product['avg_rating']}</li>";
    }

    echo "</ul>";
}

$host = "ro2padgkirvcf55m.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "k7s5awqd77n6azmg";
$password = "k1m68lag5a61x4k0";
$dbname = "kbosidshoupyzbp8";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get top 5 rated products
$topRatedProducts = getTopRatedProducts($conn);

displayTopRatedProducts($topRatedProducts);

mysqli_close($conn);
?>
