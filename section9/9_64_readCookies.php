<?php 
$name = "AhShin";
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Read Cookies</title>
    </head>

    <body>
        <h1>Read Cookies</h1>
        <?php
        // We want to obtain information of a specific cookie
        // Remember a cookie is essentially an associative array
        // isset($_COOKIE['AhShin']) checks whether the cookie named 'AhShin' was set
            if(isset($_COOKIE['AhShin'])){
                $someOne = $_COOKIE['AhShin'];
                echo $someOne;
            }
            else{
                $someOne='';
            }
        ?>


    </body>

</html>