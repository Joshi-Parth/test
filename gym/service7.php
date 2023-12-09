<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Swimming Classes";
    $serviceDescription = "Offering swimming classes for all ages and levels in our state-of-the-art swimming facilities. Whether you're a beginner or an experienced swimmer looking to improve your technique, our certified instructors are here to guide you every stroke of the way.";
    $serviceImage = "https://images.unsplash.com/photo-1487491506942-373c8f7a7ad5?auto=format&fit=crop&q=80&w=2938&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>
