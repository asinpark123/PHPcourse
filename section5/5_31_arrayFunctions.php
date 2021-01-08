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

    echo $list . '<br>';
    
    print_r($list) . '<br>';

    echo '<br>';
    
    echo max($list) . '<br>';
    
    echo min($list) . '<br>';
    
    echo '<br>';
    
    $sortedArray = sort($list);
    
    echo "sortedArray: " . $sortedArray . '<br>';

    echo "sortedArray: " . $list . '<br>';
    
    print_r($list) . '<br>';

    ?>


</body>

</html>