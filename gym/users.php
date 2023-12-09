<?php include 'pageTracking.php'; ?>

<?php
// Set header to serve JSON content
header('Content-Type: application/json');

// Array of names
$names = ["Alice", "Bob", "Charlie", "Diana", "Edward", "Fiona", "George", "Hannah", "Ian", "Julia"];

// You can shuffle the array to get a random order
shuffle($names);

// Return JSON representation of the names
echo json_encode($names);
?>