<?php include 'pageTracking.php'; ?>
<?php

    $myArr = array(
        'Mary Smith', 'John Wang', 'AlexBington', 'Sara Johnson'
    );

    $remoteData = (array) null;


    $remote_urls = ['http://hritik.us.to/cmpe-272-gym/users.php', 'https://playpal-77a0c2e5e469.herokuapp.com/users.php'];


    foreach ($remote_urls as $remote_url) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $remote_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        }

        curl_close($ch);

        if ($response === false) {
            echo 'cURL request failed';
        } else {
            $remoteData[] = json_decode($response);
            if ($remoteData === null) {
                echo 'JSON parsing failed';
            }
        }

    }

    $mergedData = array_merge($myArr, ...$remoteData);
    

    echo '<h1>All User Data</h1>';
    echo '<ul>';

    foreach ($mergedData as $user) {
        echo '<li>' . htmlspecialchars($user) . '</li>';
    }
    
    echo '</ul>';
?>

