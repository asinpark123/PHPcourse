<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body style="font-size: 1.5em;">

    <?php

    // Normal arrays
    // $number = array(10, 20, 49);
    $number = array('Juan', 'Maria', 'Jose');

    // echo $number[2] . '<br>';
    print_r($number);
    echo ('<br>');

    // Associative array
    $names = array("first_name" => 'AhShin', 'last_name' => 'Park');

    // $anArray = array("first Key" => "first value", "Second Key" => "Second Value",...)

    $fullName1 = $names['first_name'] . ' ' . $names['last_name'];

    
    print_r($names);
    echo '<br>';
    echo $fullName1;
    echo '<br>';

    // Associative arrays cannot be called by their index numerals because it doesn't exist
    $fullName2 = $names[0] . ' ' . $names[1];
    echo $fullName2;
    echo '<br>';

    ?>

</body>

</html>