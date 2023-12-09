<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Group Fitness Classes";
    $serviceDescription = "Energize your workout routine in a motivating group setting with diverse class options. Our classes range from high-intensity interval training (HIIT) and cycling to Zumba and dance, catering to all fitness levels in a fun, engaging, and social atmosphere.";
    $serviceImage = "https://plus.unsplash.com/premium_photo-1661759018287-6717dfe6200d?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>
