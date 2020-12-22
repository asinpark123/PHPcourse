<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>

    <?php

    // this is essentially a function
    $numList = array(234, 35, 66, '43', 12, '<h1>Hello</h1>');
    // another way of defining an array
    $list = ['AhShin', 26, 174];

    // call index 0 of numList
    echo $numList[0];
    echo '<br>';

    print_r($list);

    ?>

</body>

</html>