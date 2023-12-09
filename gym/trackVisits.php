<?php
function track_visit($serviceName) {
    // Name of the cookie
    $cookie_name = "last_visited_services";

    // Retrieve existing visits from the cookie, if any
    if(isset($_COOKIE[$cookie_name])) {
        $visits = json_decode($_COOKIE[$cookie_name], true);
    } else {
        $visits = array();
    }

    // Remove any existing occurrences of the current visit
    $visits = array_diff($visits, array($serviceName));

    // Add the current visit to the front of the array
    array_unshift($visits, $serviceName);

    // Store only the last 5 visits
    $visits = array_slice($visits, 0, 5);

    // Set the cookie with updated visits, expires in 30 days
    setcookie($cookie_name, json_encode($visits), time() + (86400 * 30), "/");
}
?>
