<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Pilates";
    $serviceDescription = "Discover the transformative power of Pilates in improving posture, flexibility, and core strength. Our Pilates classes, suitable for all fitness levels, focus on controlled movements and mindful breathing to enhance your physical and mental balance.";
    $serviceImage = "https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>