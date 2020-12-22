<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body style="font-size: 2em;">

    <?php

    // Normal arrays
    // $number = array(10, 20, 49);
    $number = array('Juan', 'Maria', 'Jose');

    // echo $number[2] . '<br>';
    print_r($number);
    echo ('<br>');

    // Associative array
    $names = array("first_name" => 'AhShin', 'last_name' => 'Park');

    print_r($names);
    echo '<br>';
    echo $names['first_name'] . ' ' . $names['last_name'];


    ?>

</body>

</html>