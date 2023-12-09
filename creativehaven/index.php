<?php include 'pageTracking.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Haven - Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./logo.png"></a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./productsNServices.php">Products And Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./news.php">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./contacts.php">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./validateLogin.php">View Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./user.php">User</a>
            </li>
        </ul>
    </div>
</nav>
</head>



<body>

    <section class="header">

        <div class="text-box">
            <h1>Creative Haven</h1>
            <p>
                Creative Haven is a unique retail store that offers a wide range
                of artistic and creative products to inspire and engage the artistic
                spirit in young adults and adults.
                <br></br>
                The store features a carefully curated
                selection of high-quality art supplies, stationary, and creative DIY kits.
                In addition to selling these products, Creative Haven hosts workshops and art classes
                to nurture the artistic talents of its customers.
            </p>
        </div>
    </section>

    <!---------- course ----------->

    <section class="course">
        <h1>Our products</h1>
        <div class="row">
            <div class="course-col">
                <h3>Art Supplies and Craft Kits</h3>
                <p></p>
            </div>
            <div class="course-col">
                <h3>Custom Prints and Posters</h3>
                <p></p>
            </div>
            <div class="course-col">
                <h3>Artisan Crafts</h3>
                <p></p>
            </div>
        </div>
        <a href="productsNServices.php" class="hero-btn red-btn">Explore More</a>
    </section>

    <!---------- campus ---------->

    <section class="campus">
        <h1>Our Services</h1>
        <div class="row">
            <div class="campus-col">
                <img src="includes/assets/party1.jpg">
                <div class="layer">
                    <h3>Parties and Events</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="includes/assets/sub.jpg">
                <div class="layer">
                    <h3>Art Supply Subscriptions</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="includes/assets/artisan-fair.jpg">
                <div class="layer">
                    <h3>Artisan Fairs</h3>
                </div>
            </div>

        </div>
    </section>

    <!---------- testimonials ---------->

    <section class="testimonials">
        <h1>What Our Customers are Saying</h1>
        <div class="row">
            <div class="testimonial-col">
                <img src="includes/assets/user.png">
                <div>
                    <p>The art supplies I purchased from this business exceeded my expectations! The quality is outstanding, and the variety of products has fueled my creativity. I highly recommend this store for any artist looking for top-notch materials.</p>
                    <h3>Christine Berkley</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="includes/assets/user.png">
                <div>
                    <p>Attending a workshop at this art business was a fantastic experience! The instructor was knowledgeable and engaging, making the learning process enjoyable. I left with new skills and a deeper appreciation for the art world.</p>
                    <h3>David Byer</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
            <a href="productsNServices.php">View more reviews</a>
            <a href="reviewForm.php">Submit a review</a>

        </div>
    </section>

    <!------ Call To Action ------>

    <section class="cta">

        <h1>Stop by and get creative!</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>

    </section>

    <!-------- footer ---------->

    <section class="footer">
        <div class="icons">
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-facebook"></i></a>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-linkedin"></i></a>

        </div>
        <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1" class="footer-link">
        </a>
    </section>