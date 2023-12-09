<?php include 'pageTracking.php'; ?>

<?php
    $serviceTitle = "Sauna/Steam Room";
    $serviceDescription = "Unwind and detoxify in our top-of-the-line sauna and steam rooms. The perfect way to relax muscles, alleviate stress, and promote a healthy detox, our facilities are designed to enhance your recovery and relaxation experience.";
    $serviceImage = "https://plus.unsplash.com/premium_photo-1683141179185-019966ae7ed6?auto=format&fit=crop&q=80&w=2924&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
    include('servicesTemplate.php');
    include 'trackVisits.php';
    track_visit($serviceTitle);
?>
