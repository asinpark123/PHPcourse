<?php
// Sessions - create a file in your server using a function
// set a cookie in your browser that references that file
// usage information is saved in your server, therefore you can store a lot more information

// Start the session using session_start();
session_start();
// this will automatically create cookies that references the file location of the session data
// NAME: PHPSESSID , CONTENT: hfocld42sa3op07kt99orbvj7i

$_SESSION['greeting'] = 'Hello world';

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

    </body>

</html>