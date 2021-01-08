<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>

<body>

    <?php
    $list = [343, 423, 4234, 324, 362, 346, 34];

    echo max($list) . '<br>';

    echo min($list) . '<br>';

    $sortedArray = sort($list) . '<br>';

    echo $sortedArray . '<br>';

    echo $list . '<br>';

    print_r($list) . '<br>';

    ?>


</body>

</html>