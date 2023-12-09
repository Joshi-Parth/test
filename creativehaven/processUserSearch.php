<?php include 'pageTracking.php'; ?>
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigationBar.php';
include $_SERVER['DOCUMENT_ROOT'] . '/database/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];

    if (empty($search)) {
        echo "Search term is required.";
    } else {

        $db = Database::getDBConnection();

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $search = '%' . $search . '%';
        
        $stmt = $db->prepare("SELECT first_name, email, cell_phone FROM users WHERE first_name LIKE ? OR email LIKE ? OR cell_phone LIKE ?");
        $stmt->bind_param("sss", $search, $search, $search);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Name: " . $row['first_name'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Cell Phone: " . $row['cell_phone'] . "<br><br>";
            }
        } else {
            echo "No users found matching the search term.";
        }

        $stmt->close();
    }
} else {
    echo "Invalid request.";
}
?>
