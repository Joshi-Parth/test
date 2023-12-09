<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Nutrition Plans";
    $serviceDescription = "Customized nutrition advice to complement your fitness regime. Our expert nutritionists will work with you to create a balanced diet plan, tailored to your individual health goals, dietary needs, and preferences, aiding in optimal health and performance.";
    $serviceImage = "https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&q=80&w=2953&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>