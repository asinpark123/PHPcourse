<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>

    <body>

        <?php

        $string = 'Hello, do you like the class?';

        echo strlen($string) . "<br>";

        echo strtoupper($string) . "<br>";

        echo strtolower($string) . "<br>";

        // just like echo 
        // The major differences to echo are that print only accepts a single argument and always returns 1.
        
        print ($string) . "<br>";
        echo print ($string) . "<br>";
        echo "<br>";

        // Output a formatted string, returns the length of the outputted string.

        printf ($string);
    

        ?>


    </body>

</html>