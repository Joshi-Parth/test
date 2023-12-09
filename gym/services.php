<?php include 'pageTracking.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Last Visited Services -->
    <?php if (isset($_COOKIE['last_visited_services'])): ?>
        <section class="bg-gray-50 py-12">
            <div class="container mx-auto px-6">
                <h3 class="text-3xl font-semibold text-center text-gray-800 mb-8">Last 5 Visited Services</h3>
                <div class="flex flex-wrap justify-center">
                    <?php
                        $service_links = [
                            "Yoga Classes" => "service1.php",
                            "Personal Training" => "service2.php",
                            "Nutrition Plans" => "service3.php",
                            "Group Fitness Classes" => "service4.php",
                            "Weight Training" => "service5.php",
                            "Cardio Equipment" => "service6.php",
                            "Swimming Classes" => "service7.php",
                            "Sauna/Steam Room" => "service8.php",
                            "Sports Therapy" => "service9.php",
                            "Pilates" => "service10.php",
                        ];

                        $last_visited = array_reverse(json_decode($_COOKIE['last_visited_services'], true));
                        $unique_services = [];

                        foreach ($last_visited as $visit) {
                            if (!in_array($visit, $unique_services)) {
                                $unique_services[] = $visit;
                            }
                            if (count($unique_services) == 5) {
                                break;
                            }
                        }

                        foreach ($unique_services as $visit):
                            $url = $service_links[$visit] ?? '#'; // Fallback to '#' if the service name doesn't match
                    ?>
                        <div class="m-4 bg-white shadow-md rounded-lg p-6 w-full sm:w-1/3 lg:w-1/4">
                            <h4 class="text-xl font-semibold mb-3">
                                <a href="<?= htmlspecialchars($url) ?>" class="hover:underline">
                                    <?= htmlspecialchars($visit) ?>
                                </a>
                            </h4>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <!-- Services -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-semibold text-center text-gray-800 mb-8">Our Products & Services</h2>
            <div class="flex flex-wrap">
    
                <!-- Product/Service 1 -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Yoga Classes</h3>
                        <p class="text-gray-700 mb-4">Join our expert-led yoga sessions to improve flexibility and peace of mind.</p>
                        <a href="service1.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>
    
                <!-- Product/Service 2 -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Personal Training</h3>
                        <p class="text-gray-700 mb-4">Get personalized workout plans and one-on-one training sessions.</p>
                        <a href="service2.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>
    
                <!-- Product/Service 3 -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Nutrition Plans</h3>
                        <p class="text-gray-700 mb-4">Customized nutrition advice to complement your fitness regime.</p>
                        <a href="service3.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>
    
                <!-- More products/services can be added here following the same structure -->
                <!-- Product/Service 4: Group Fitness Classes -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Group Fitness Classes</h3>
                        <p class="text-gray-700 mb-4">Energize your workout routine in a motivating group setting with diverse class options.</p>
                        <a href="service4.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

                <!-- Product/Service 5: Weight Training -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Weight Training</h3>
                        <p class="text-gray-700 mb-4">Build strength and muscle through our comprehensive weight training program.</p>
                        <a href="service5.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

                <!-- Product/Service 6: Cardio Equipment -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Cardio Equipment</h3>
                        <p class="text-gray-700 mb-4">State-of-the-art machines to help you achieve your cardio fitness goals.</p>
                        <a href="service6.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

                <!-- Product/Service 7: Swimming Classes -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Swimming Classes</h3>
                        <p class="text-gray-700 mb-4">From beginners to advanced, our swimming classes cater to all levels.</p>
                        <a href="service7.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

                <!-- Product/Service 8: Sauna/Steam Room -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Sauna/Steam Room</h3>
                        <p class="text-gray-700 mb-4">Unwind and detoxify in our top-of-the-line sauna and steam rooms.</p>
                        <a href="service8.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

                <!-- Product/Service 9: Sports Therapy -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Sports Therapy</h3>
                        <p class="text-gray-700 mb-4">Personalized therapy sessions to help you recover and perform at your best.</p>
                        <a href="service9.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

                <!-- Product/Service 10: Pilates -->
                <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 rounded shadow py-5 px-6">
                        <h3 class="text-xl font-semibold mb-4">Pilates</h3>
                        <p class="text-gray-700 mb-4">Improve your posture, strength, and flexibility with our Pilates classes.</p>
                        <a href="service10.php" class="text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
</html>