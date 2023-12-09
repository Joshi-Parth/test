<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Search Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div><?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigationBar.php'; ?></div>
    <h1>User Search Form</h1>
    <form action="processUserSearch.php" method="POST">
        <label for="search">Search by First Name, Email, or Cell Phone:</label>
        <input type="text" id="search" name="search" required><br>

        <input type="submit" value="Search">
    </form>
</body>
</html>