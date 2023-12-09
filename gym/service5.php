<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Weight Training";
    $serviceDescription = "Build strength and muscle through our comprehensive weight training program. We offer both free weights and machine-assisted exercises, focusing on proper form and technique to maximize results and minimize injury risk.";
    $serviceImage = "https://images.unsplash.com/photo-1520948013839-62020f374478?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>
