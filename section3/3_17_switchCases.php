<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>

<body>

    <?php

    // Use Switch when we want to test a condition agains multiple values
    $number = 100;

    switch ($number) {
        case 34:
            echo "it is 34" . "<br>";
            break;
        case 37:
            echo "it is 34" . "<br>";
            break;
        case 35:
            echo "it is 34" . "<br>";
            break;
        case 24:
            echo "it is 34" . "<br>";
            break;

        default:
            echo "we could not find a match";
            break;
    }

    ?>


</body>

</html>