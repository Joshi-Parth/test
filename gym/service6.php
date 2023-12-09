<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Cardio Equipment";
    $serviceDescription = "Our gym features state-of-the-art cardio equipment, including treadmills, ellipticals, and stationary bikes, all designed to help you achieve your cardio fitness goals. Whether you're training for a marathon or just looking to stay fit, our equipment caters to all levels.";
    $serviceImage = "https://images.unsplash.com/flagged/photo-1556746834-1cb5b8fabd54?auto=format&fit=crop&q=80&w=2944&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>
