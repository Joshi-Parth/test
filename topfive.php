<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Five Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        .top-products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .product-card {
            width: 45%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .product-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <h2>Top Five Products in the Marketplace</h2>

    <!-- Global Top Five -->
    <h3>Global Top 5</h3>
    <div class="top-products">
        <div class="product-card">
            <h4>1. Art Supplies</h4>
        </div>
        <div class="product-card">
            <h4>2. DIY Craft Kits</h4> 
        </div>
        <div class="product-card">
            <h4>3. Yoga Classes</h4>
        </div>
        <div class="product-card">
            <h4>4. Personal Training</h4>
        </div>
        <div class="product-card">
            <h4>5. Tennis</h4>
        </div>
        <!-- Repeat for the rest of Global Top 5 -->
    </div>

    <h3>Flexifit Top 5</h3>
    <div class="top-products">
        <div class="product-card">
            <h4>1. Yoga Classes</h4>
        </div>
        <div class="product-card">
            <h4>2. Personal Training</h4>
        </div>
        <div class="product-card">
            <h4>3. Nutrition Plans</h4>
        </div>
        <div class="product-card">
            <h4>4. Weight Training</h4>
        </div>
        <div class="product-card">
            <h4>5. Swimming Classes</h4>
        </div>
        <!-- Repeat for the rest of PlayPal Top 5 -->
    </div>

    <!-- Creative Haven Top Five -->
    <h3>Creative Haven Top 5</h3>
    <div class="top-products">
        <div class="product-card">
            <h4>1. Art Supplies</h4>
        </div>
        <div class="product-card">
            <h4>2. DIY Craft Kits</h4> 
        </div>
        <div class="product-card">
            <h4>3. Artisan Crafts</h4>
        </div>
        <div class="product-card">
            <h4>4. Custom Art Framing</h4>
        </div>
        <div class="product-card">
            <h4>5. Pottery And Clay supplies</h4>
        </div>
        <!-- Repeat for the rest of Creative Haven Top 5 -->
    </div>

    <!-- PlayPal Top Five -->
    <h3>PlayPal Top 5</h3>
    <div class="top-products">
        <div class="product-card">
            <h4>1. Tennis</h4>
        </div>
        <div class="product-card">
            <h4>2. Soccer</h4>
        </div>
        <div class="product-card">
            <h4>3. Basketball</h4>
        </div>
        <div class="product-card">
            <h4>4. Table Tennis</h4>
        </div>
        <div class="product-card">
            <h4>5. Badminton</h4>
        </div>
        <!-- Repeat for the rest of PlayPal Top 5 -->
    </div>



</body>
</html>
