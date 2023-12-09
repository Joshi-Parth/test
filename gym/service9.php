<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Sports Therapy";
    $serviceDescription = "Our sports therapy sessions are focused on helping athletes of all levels recover from injuries and improve their performance. Through personalized treatment plans, we address specific needs to ensure a speedy and effective return to your sport.";
    $serviceImage = "https://plus.unsplash.com/premium_photo-1663076196987-b430b6189524?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>