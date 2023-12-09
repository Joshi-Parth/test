<?php 
ob_start();
include 'pageTracking.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
      <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>
    <?php
        
        function updateReviewsCookie($productName, $rating, $review) {
            $reviews = [];
        
            // Check if the cookie exists
            if (isset($_COOKIE['product_reviews'])) {
                $reviews = json_decode($_COOKIE['product_reviews'], true);
            }
        
            // Add the new review to the array
            $newReview = [
                'rating' => $rating,
                'review' => $review,
                'timestamp' => time(),
            ];
        
            $reviews[$productName][] = $newReview;
        
            // Store the updated reviews in a cookie
            setcookie('product_reviews', json_encode($reviews), time() + 3600);
        }

        function updateVisitedProductsCookie($productName) {
            $visitedProducts = [];
            $display_products = [];
            if (isset($_COOKIE['visited_products'])) {
                $visitedProducts = json_decode($_COOKIE['visited_products'], true);
            }
        
            // Add the product to the list and keep only the last five products
            array_unshift($visitedProducts, $productName);
            $display_products = array_slice($visitedProducts, 0, 5);
        
            // Store the list in a cookie
            setcookie('visited_products', json_encode($visitedProducts), time() + 3600, '/');
            // print_r($display_products);
        }   
    // Check if the 'product' query parameter exists
    if (isset($_GET['product'])) {
        $selectedProduct = $_GET['product'];
        updateVisitedProductsCookie($selectedProduct);
        
        // Define an array of product data (you can expand this array)
        $products = array(
            array(
                "name" => "Tennis",
                'description' => 'Find Tennis Partners near you !',
                "image" => "tennis.jpg",
                
            ),
            array(
                "name" => "Soccer",
                'description' => 'Find Soccer Team Partners near you !.',
                "image" => "soccer.jpg",
            ),
            array(
                "name" => "Basketball",
                'description' => 'Find Basketball Team Partners near you !',
                "image" => "basketball.jpg",
            ),
            array(
                "name" => "Pickle Ball",
                'description' => 'Find Pickle Ball Partners near you !',
                "image" => "pickleball.jpg",
            ),
            array(
                "name" => "Table Tennis",
                'description' => 'Find Table Tennis Partners near you !',
                "image" => "tabletennis.jpg",
            ),
            array(
                "name" => "Badminton",
                'description' => 'Find Table Tennis Partners near you !',
                "image" => "badminton1.jpg",
            ),
            array(
                "name" => "Squash",
                'description' => 'Find Squash Partners near you !',
                "image" => "squash.jpg",
            ),
            array(
                "name" => "American Football",
                'description' => 'Find American Football Team Partners near you !',
                "image" => "americanFootball.jpg",
            ),
            array(
                "name" => "Snooker",
                'description' => 'Find Snooker Partners near you !',
                "image" => "snooker.jpg",
            ),
            array(
                "name" => "Baseball",
                'description' => 'Find Baseball Team Partners near you !',
                "image" => "baseball.jpg",
            ),
        );
             
        foreach ($products as $product) {
            if ($product['name'] == $selectedProduct) {
                // echo "Selected Product: " . $visitedProducts. "$$$";
                // print_r($visitedProducts);
                echo "<h1>{$product['name']}</h1>";
                echo "<p>{$product['description']}</p>";
                echo "<img src='assets/img/team/{$product['image']}' alt='{$product['name']}' width='300' height='500'>";
                break;
            }
        }



        $reviews = [];
        if (isset($_COOKIE['product_reviews'])) {
            $reviews = json_decode($_COOKIE['product_reviews'], true);
        }

        // Display reviews for the selected product
        if (isset($reviews[$selectedProduct])) {
            foreach ($reviews[$selectedProduct] as $review) {
                echo "<p><strong>Rating:</strong> {$review['rating']} / 5</p>";
                echo "<p><strong>Review:</strong> {$review['review']}</p>";
                echo "<p><strong>Posted on:</strong> " . date('Y-m-d H:i:s', $review['timestamp']) . "</p>";
                echo "<hr>";
            }
        } else {
            echo "<p>No reviews available for this product.</p>";
        }

        // Display the review form
    echo "<h2>Add a Review</h2>";
    echo "<form method='POST' action='product.php?product=$selectedProduct'>";
    echo "<label for='rating'>Rating (1-5):</label>";
    echo "<input type='number' name='rating' min='1' max='5' required>";
    echo "<br>";
    echo "<label for='review'>Review:</label>";
    echo "<textarea name='review' rows='4' required></textarea>";
    echo "<br>";
    echo "<input type='submit' value='Submit Review'>";
    echo "</form>";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['rating'], $_POST['review'])) {
            $rating = $_POST['rating'];
            $reviewText = $_POST['review'];

            // Sanitize user input (prevent potential security issues)
            $rating = intval($rating);
            $reviewText = htmlspecialchars($reviewText);

            // Update reviews in cookies
            updateReviewsCookie($selectedProduct, $rating, $reviewText);

            // Refresh the page to display the updated reviews
            // header("Location: product.php?product=$selectedProduct");
            exit();
        }
    }





    } else {
        echo "Product parameter missing.";
    }

    ob_end_flush();  
    ?>
</body>
</html>
