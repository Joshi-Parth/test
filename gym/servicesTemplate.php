<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $serviceTitle; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold text-center text-gray-800 mb-8"><?php echo $serviceTitle; ?></h2>
            <div class="flex flex-wrap justify-center">
                <div class="max-w-lg">
                    <img src="<?php echo $serviceImage; ?>" alt="<?php echo $serviceTitle; ?>" class="h-64 w-full object-cover rounded shadow mb-4">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4"><?php echo $serviceTitle; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $serviceDescription; ?></p>
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-8">
                <a href="services.php" class="text-indigo-600 hover:text-indigo-800 text-sm font-semibold">← Back to Products & Services</a>
            </div>
        </div>
    </section>

</body>
</html>
