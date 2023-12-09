<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enterprise Online Market Place</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<?php include 'mainNavbar.php'; ?>

<!-- Content -->
<div class="container mx-auto px-4">
    <h1 class="text-center text-4xl font-bold text-gray-800 my-10">
        User Tracking
    </h1>

    <?php
    // Check if the page_visits cookie exists
    if (isset($_COOKIE['page_visits'])) {
        // Decode the JSON data into an array
        $page_visits = json_decode($_COOKIE['page_visits'], true);

        // Display the visited links
        echo "<h2 class='text-2xl font-semibold mb-4'>Visited Links:</h2>";
        echo "<ul class='list-disc pl-5'>";
        foreach ($page_visits as $visit) {
            echo "<li>" . htmlspecialchars($visit, ENT_QUOTES, 'UTF-8') . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No visit history available.</p>";
    }
    ?>

</div>

</body>
</html>
