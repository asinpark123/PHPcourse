<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=q">
    <title>Constants</title>
</head>

<body>

    <?php
    $animal = array('pig','mouse','horse');
    $number = 10;
    echo $number . "<BR>";

    // Define a constant
    define("NAME", "Ah Shin Park");

    echo NAME . '<br>';
    echo '<br>';


    // Another way to define constant
    const ANIMALS = array('dog', 'cat', 'bird');
    
    // can define constants without $ sign
    foreach (ANIMALS as $item) {

        echo $item . '<br>';
    }

    echo '<br>';

    foreach ($animal as $i){

        echo $i . '<br>';
    }


    ?>


</body>

</html>