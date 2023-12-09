<?php include 'pageTracking.php'; ?>
<?php
session_start(); // Start the session

// Retrieve the search results from the session variable
$searchResults = $_SESSION['search_results'];

// Output HTML to display the search results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h2>Search Results</h2>

    <?php
    if (!empty($searchResults)) {
        foreach ($searchResults as $row) {
            echo "<p>Name: {$row['first_name']} {$row['last_name']}</p>";
            echo "<p>Email: {$row['email']}</p>";
            echo "<p>Home Phone: {$row['home_phone']}</p>";
            echo "<p>Cell Phone: {$row['cell_phone']}</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No results found.</p>";
    }
    ?>

    <a href="user_section.php">Go Back to User Section</a>
</body>
</html>
