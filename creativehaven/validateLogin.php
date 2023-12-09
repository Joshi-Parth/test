<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Haven - View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigationBar.php';

        $userVerified=0;

        if ( isset( $_POST["login"] ) ) {

            extract( $_POST );

            if ( !$username || !$password ) {
                fieldsblank();
                die();
            }

            while (! $userVerified ) {

                if ( $username == "admin" ) {
                    $userVerified= 1;

                    if ( $password == "adminpwd" ) {
                        accessGranted();
                    } else {
                        wrongPassword();
                    }
                } 
            }

            if ( !$userVerified ) {
                accessDenied();
            }
        
        } else {
            include $_SERVER['DOCUMENT_ROOT'] . '/loginForm.php';
        }

        function accessGranted() {
            displayUsers();
        }

        function invalidUsername() {
            print("<h1>Access denied. You entered an invalid username.</h1>");
        }

        function wrongPassword() {
            print("<h1>Access denied. You entered an invalid password.</h1>");
        }

        function accessDenied() {
            print("<h1>Access denied to this server.</h1>");
        }

        function fieldsblank() {
            print("<h4>Please fill in all form fields.</h4>");
        }

        function displayUsers(){
            echo '<div>
                    <h1>Current Users:</h1>
                    <ul>
                        <li>Mary Smith</li>
                        <li>John Wang</li>
                        <li>Alex Bington</li>
                        <li>Sara Johnson</li>
                    </ul>
                </div>';
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
