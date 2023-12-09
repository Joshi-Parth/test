<?php
// Start the session if you are using sessions
// session_start();

// Check if the user_tracking cookie is set
if (isset($_COOKIE['user_tracking'])) {
    // Unset the cookie by setting its expiration time to the past
    setcookie('user_tracking', '', time() - 3600, '/');
}

// If you are using sessions, do the following instead:
// Unset all of the session variables
// $_SESSION = array();

// Destroy the session
// session_destroy();

// Redirect to the home page or login page
header('Location: main.php');
exit;
?>
