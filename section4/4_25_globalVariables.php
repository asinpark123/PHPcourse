<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global variables and scope</title>
</head>

<body>

    <?php

    $x = 'outside';
    function convert()
    {
        global $x;
        $x = 'inside';
    }
    echo $x . '<br>';

    convert();

    echo $x . '<br>';

    ?>

</body>

</html>