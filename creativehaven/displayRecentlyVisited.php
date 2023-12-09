<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Creative Haven - Recently Visited Products</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <?php

            include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigationBar.php'; 
            include $_SERVER['DOCUMENT_ROOT'] . '/cookies.php';

            echo '<h1>Last Five Visted Products</h1>';

            foreach ($_SESSION['visited_products'] as $product) {
                echo "<li> $product </li>";
            }
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
            
    </body>

</html>



