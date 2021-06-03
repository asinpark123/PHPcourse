<?php
// Sessions - create a file in the host server using the function session_start();
// set a cookie in your browser that references to that file
// usage information is saved in your server, unlike cookies where they save to the browser
// therefore you can store a lot more information in a session

// Start the session using session_start();
// This needs to be present in every page that intends on using sessions
session_start();

// this will automatically create cookies that references the file location of the session data
// NAME: PHPSESSID , CONTENT: hfocld42sa3op07kt99orbvj7i <= will change each session

// Below you can see that session information is saved as an associative array like $_GET and $_POST
// We can pull information from the session across pages
$_SESSION['greeting'] = 'Hello world';

// You should be able to see the value transfer over to session2.php page
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Session1</title>
    </head>

    <body>
    <h1>Session 1</h1>
    </body>

</html>