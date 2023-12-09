<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Personal Training";
    $serviceDescription = "Get personalized workout plans and one-on-one training sessions tailored to your fitness goals. Our experienced trainers are dedicated to helping you improve your physical strength, endurance, and overall health in a motivating and challenging environment.";
    $serviceImage = "https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>