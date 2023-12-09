<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigationBar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include $_SERVER['DOCUMENT_ROOT'] . '/database/database.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/database/createUsersTable.php';
    
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"] ? $_POST["address"] : "";
    $homephone = $_POST["homephone"] ? $_POST["homephone"] : "";
    $cellphone = $_POST["cellphone"];

    $db = Database::getDBConnection();

    $stmt = $db->prepare("INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) VALUES (?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $address, $homephone, $cellphone);
    
    if ($stmt->execute()) {
        echo "User created successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

} else {
    echo "Invalid request.";
}
?>
