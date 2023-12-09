<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Yoga Classes";
    $serviceDescription = "Join our expert-led yoga sessions to improve flexibility, peace of mind, and overall well-being. Our classes cater to all levels, from beginners to advanced practitioners, ensuring a supportive and nurturing environment to enhance your yoga journey.";
    $serviceImage = "https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&q=80&w=3020&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit('Yoga Classes');
?>