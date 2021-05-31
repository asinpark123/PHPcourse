<?php

$name = 'AhShin';
$value = '100';
$expiration = time() + 60*60*24*7;

setcookie($name, $value, $expiration);

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
    <h1>Setting Cookies</h1>
</body>
</html>