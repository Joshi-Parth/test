<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Creation Form</title>
</head>
<body>
    
    <h2>Create User</h2>
    <form action="#" id="createUserForm" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="home_address">Home Address:</label>
        <input type="text" name="home_address">

        <label for="home_phone">Home Phone:</label>
        <input type="tel" name="home_phone">

        <label for="cell_phone">Cell Phone:</label>
        <input type="tel" name="cell_phone" required>

        <button type="button" onclick="createUser()">Submit</button>
    </form>
    <script>
        function createUser() {
            var formData = new FormData(document.getElementById('createUserForm'));

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Handle the response if needed
                    console.log(this.responseText);
                }
            };

            xhttp.open("POST", "process_create_user.php", true);
            xhttp.send(formData);
        };
        // function createUser() {
        //     var formData = new FormData(document.getElementById('createUserForm'));

        //     var xhttp = new XMLHttpRequest();
        //     xhttp.onreadystatechange = function() {
        //         if (this.readyState == 4 && this.status == 200) {
        //             // Handle the response if needed
        //             console.log(this.responseText);
        //         }
        //     };

        //     xhttp.open("POST", "process_create_user.php", true);
        //     xhttp.send(formData);
        // }
    </script>

    
</body>
</html> -->
<?php include 'pageTracking.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Creation Form</title>
</head>
<body>
    <h2>Create User</h2>
    <form action="process_create_user.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="home_address">Home Address:</label>
        <input type="text" name="home_address">

        <label for="home_phone">Home Phone:</label>
        <input type="tel" name="home_phone">

        <label for="cell_phone">Cell Phone:</label>
        <input type="tel" name="cell_phone" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
