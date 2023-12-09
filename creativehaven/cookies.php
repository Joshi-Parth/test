<?php include 'pageTracking.php'; ?>
<?php

    session_start();

    $product_file_to_product_name_map = [
        'artisanCrafts.php' => 'Artisan Crafts',
        'artSupplies.php' => 'Art Supplies',
        'diy.php' => 'DIY Craft Kits',
        'framing.php' => 'Custom Art Framing',
        'parties.php' => 'Parties and Events',
        'pottery.php' => 'Pottery and Clay Supplies',
        'prints.php' => 'Custom Prints and Posters',
        'stationary.php' => 'Stationary and Paper Supplies',
        'subscriptions.php' => 'Art Supply Subscriptions',
        'workshops.php' => 'Workshops and Classes'
    ];

    $current_url = $_SERVER['REQUEST_URI'];

    // get specific product file from url
    $url_parts = explode('/', $current_url);
    $product_file = end($url_parts); 
    if ($product_file) {

        // Initialize products array if not yet created
        if (!isset($_SESSION['visited_products'])) {
            $_SESSION['visited_products'] = array();
        }

        // append curr product to front of the array
        if ($product_file != "productsNServices.php" && $product_file != "cookies.php"
                                        && $product_file != "displayRecentlyVisited.php") {
            $product_name = $product_file_to_product_name_map[$product_file];

            array_unshift($_SESSION['visited_products'], $product_name);
        }
        
        // remove any excess sites from beginning of array (to keep most recent)
        if (count($_SESSION['visited_products']) > 5) {
            array_pop($_SESSION['visited_products']);
        }
    }

?>