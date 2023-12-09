<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Creative Haven - View Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="/htdocs/logo.png"></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../productsNServices.php">Products And Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contacts.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../validateLogin.php">View Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user.php">User</a>
                </li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <h1>Admin Login</h1>
    <form method="post" action="validateLogin.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username"><br />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br />
        </div>
        <input type="submit" value="Login" name="login" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>