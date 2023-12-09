<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Reviews</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <?php include 'navbar.php'; ?>
    <div class="container mx-auto px-4 py-8">
        <?php
        $new_review_added = false;
        $new_review = [];

        // Handling the review submission
        if (isset($_POST['submit_review'])) {
            $service = $_POST['service']; // The selected service from the dropdown
            $rating = $_POST['rating']; // The rating given
            $review = $_POST['review']; // The review text

            // Review data structure
            $new_review = [
                'service' => $service,
                'rating' => $rating,
                'review' => $review
            ];

            // Retrieve existing reviews from the cookie
            $existing_reviews = isset($_COOKIE['reviews']) ? json_decode($_COOKIE['reviews'], true) : [];
            $existing_reviews[] = $new_review;

            // Save the updated reviews back to the cookie
            setcookie('reviews', json_encode($existing_reviews), time() + (86400 * 30), "/");

            $new_review_added = true;
        }

        // Review Form with Tailwind CSS
        echo '<form method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">';
        echo '    <label for="service" class="block text-gray-700 text-sm font-bold mb-2">Service:</label>';
        echo '    <select name="service" class="block w-full border-gray-300 rounded-md mb-4" required>';
        echo '        <option value="Yoga Classes">Yoga Classes</option>';
        echo '        <option value="Personal Training">Personal Training</option>';
        echo '        <option value="Nutrition Plans">Nutrition Plans</option>';
        // Add more services as needed
        echo '    </select>';
        echo '    <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating (1-5):</label>';
        echo '    <input type="number" name="rating" class="block w-full border-gray-300 rounded-md mb-4" min="1" max="5" required>';
        echo '    <label for="review" class="block text-gray-700 text-sm font-bold mb-2">Review:</label>';
        echo '    <textarea name="review" class="block w-full border-gray-300 rounded-md mb-4" required></textarea>';
        echo '    <input type="submit" name="submit_review" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer" value="Submit Review">';
        echo '</form>';

        // Displaying Reviews with Tailwind CSS
        $reviews = $new_review_added ? $existing_reviews : (isset($_COOKIE['reviews']) ? json_decode($_COOKIE['reviews'], true) : []);

        echo "<div class='mt-8'>";
        echo "<h3 class='text-xl font-semibold mb-4'>Customer Reviews:</h3>";
        foreach ($reviews as $review) {
            echo "<div class='bg-white p-4 rounded-lg shadow mb-4'>";
            echo "<p><span class='font-semibold'>Service:</span> " . htmlspecialchars($review['service']) . "</p>";
            echo "<p><span class='font-semibold'>Rating:</span> " . htmlspecialchars($review['rating']) . "/5</p>";
            echo "<p><span class='font-semibold'>Review:</span> " . htmlspecialchars($review['review']) . "</p>";
            echo "</div>";
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>