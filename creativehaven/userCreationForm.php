<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Creative Haven - Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    
    <body>
        <div><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigationBar.php'; ?></div>
        <h1>Register User</h1>
        <form method="post" action="processUserCreationForm.php">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" require><br/>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" require><br/>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$"
                 name="email" id="email" require><br/>
            </div>
            <div class="form-group">
                <label for="address">Home Address</label>
                <input type="text" name="address" id="address"><br/>
            </div>
            <div class="form-group">
                <label for="homephone">Home Phone</label>
                <input type="text"
                pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$" 
                name="homephone" id="homephone"><br/>
            </div>
            <div class="form-group">
                <label for="cellphone">Cell Phone</label>
                <input type="tel" pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$"
                 name="cellphone" id="cellphone" require><br/>
            </div>
            <input type="submit" value="Register" name="register" class="btn btn-primary">
        </form>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
