<?php include 'pageTracking.php'; ?>
<?php
    $myArr = array(
        "Mary Smith",
        "John Wang", 
        "Alex Bington", 
        "Sara Johnson"
    );

    $myJSON = json_encode($myArr);

    echo $myJSON;
    
?>