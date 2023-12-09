
<?php
// Check if the tracking cookie exists. If not, create one.
if (!isset($_COOKIE['user_tracking'])) {
    // Generate a unique identifier for the user
    $userId = uniqid('user_', true);

    // Set the cookie with the unique identifier
    // The cookie is set to expire in 30 days
    setcookie('user_tracking', $userId, time() + (86400 * 30), "/");
} else {
    $userId = $_COOKIE['user_tracking'];
}

// Construct the full URL of the current page
$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$current_url = $scheme . '://' . $host . $uri;

// Retrieve the existing page visits from the cookie
$page_visits = isset($_COOKIE['page_visits']) ? json_decode($_COOKIE['page_visits'], true) : [];

// Add the current URL to the page visits array
$page_visits[] = $current_url;

// Limit the size of the page visits array to prevent it from growing too large
$max_length = 100; // for example, keep only the last 10 visits
if (count($page_visits) > $max_length) {
    $page_visits = array_slice($page_visits, -$max_length);
}

// Store the updated page visits in the cookie
setcookie('page_visits', json_encode($page_visits), time() + (86400 * 30), "/");

// Debug output (for development purposes only - remove this for production)
// echo "<h3>User Tracking Information</h3>";
// echo "<p>User ID: " . $userId . "</p>";
// echo "<h4>Page Visits:</h4>";
// echo "<ul>";
// foreach ($page_visits as $page) {
//     echo "<li>" . htmlspecialchars($page, ENT_QUOTES, 'UTF-8') . "</li>";
// }
// echo "</ul>";
?>