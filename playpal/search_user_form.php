<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Search Form</title>
</head>
<body>
    <h2>Search Users</h2>
    <form action="process_search_users.php" method="post">
        <label for="search_query">Search:</label>
        <input type="text" name="search_query" required>

        <button type="submit">Search</button>

    </form>
</body>
</html>
