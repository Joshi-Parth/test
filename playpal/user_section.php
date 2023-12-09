<?php include 'pageTracking.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Section</title>
</head>
<body>
    <h1>User Section</h1>

    <div>
        <h2>Create User</h2>
        <p><a href="#" onclick="loadForm('create_user_form.php')">Create User Form</a></p>
    </div>

    <div>
        <h2>Search Users</h2>
        <p><a href="#" onclick="loadForm('search_user_form.php')">Search Users Form</a></p>
    </div>

    <div id="form-container">
        <!-- Form content will be loaded here -->
    </div>

    <div id="search-results">
        <!-- Search results will be displayed here -->
    </div>

    <script>
        function loadForm(formFileName) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("form-container").innerHTML = this.responseText;
                    // Clear search results when loading a new form
                    document.getElementById("search-results").innerHTML = "";
                }
            };
            xhttp.open("GET", formFileName, true);
            xhttp.send();
        }
    </script>
</body>
</html>
