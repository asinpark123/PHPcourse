<?php 
$name = "AhShin";
$value = 100;       // can be str or int
$expiration = time() + (60*60*24*7);

// Info about the user in cookies are set in super global $_COOKIE;
// We set cookies using setcookie($name,$value,$expiration);
// Parameter for time(); is seconds. (60*60*24*7) == 7 days
// We can set multiple cookies at the same time, thus personlising the UX depending on the cookie value
// cookies are set in browsers
setcookie($name,$value,$expiration);



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Setting Cookies</title>
    </head>

    <body>

    </body>

</html>