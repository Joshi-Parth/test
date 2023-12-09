<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
        }

        .navbar-brand img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .navbar-brand {
            padding: 10px;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }
    </style>
</head>

<body>
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
</body>

</html>
