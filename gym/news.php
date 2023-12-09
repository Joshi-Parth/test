<!DOCTYPE html>
<?php include 'pageTracking.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <section class="box-border py-8 leading-7 text-gray-900 bg-white border-0 border-gray-200 border-solid sm:py-12 md:py-16 lg:py-24">
        <div class="box-border max-w-6xl px-4 pb-12 mx-auto border-solid sm:px-6 md:px-6 lg:px-4">
            <div class="flex flex-col leading-7 text-gray-900">
                <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                    Lastest News
                </h2>
                <p class="box-border mt-4 text-2xl leading-normal text-gray-900 border-solid">
                    Empower Your Journey, One Plan at a Time.
                </p>
            </div>

            <div class="mt-10">
                <h2 class="mb-2 text-lg font-semibold text-gray-900">Events & Challenges:</h2>
                <ul class="space-y-1 text-gray-600 list-disc list-inside dark:text-gray-400">
                    <li>
                        Community Runs: Announcing participation or organization of marathon or shorter-distance runs.
                    </li>
                    <li>
                        Monthly Fitness Challenges: E.g., "30-day Abs Challenge" or "Summer Slimdown Challenge."
                    </li>
                    <li>
                        Charity Events: Maybe a workout fundraiser for a good cause.
                    </li>
                </ul>
            </div>

            <div class="mt-10">
                <h2 class="mb-2 text-lg font-semibold text-gray-900">Spotlights:</h2>
                <ul class="space-y-1 text-gray-600 list-disc list-inside dark:text-gray-400">
                    <li>
                        Member of the Month: Karan Khana -- Completed 20k steps everyday
                    </li>
                    <li>
                        Trainer Profile: Meet Sophia Bennett, our functional training maestro with a passion for nutrition.
                    </li>
                    <li>
                        Success Stories: Dive into the joint fitness journey of siblings Maya & Jake, from gym routines to marathon finishes
                    </li>
                </ul>
            </div>

            <div class="mt-10">
                <h2 class="mb-2 text-lg font-semibold text-gray-900">Deals:</h2>
                <ul class="space-y-1 text-gray-600 list-disc list-inside dark:text-gray-400">
                    <li>
                        Early Bird Bonus: First 50 sign-ups receive a complimentary personal training session.
                    </li>
                    <li>
                        Refer & Reap: Introduce a friend to FlexFit and both enjoy a free month of premium access.
                    </li>
                    <li>
                        Summer Special: Enroll in any group class this season and snag a 20% discount on nutrition counseling sessions.
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>