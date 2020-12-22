<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=q">
    <title>Constants</title>
</head>

<body>

    <?php
    $number = 10;
    echo $number . "<BR>";

    // Define a constant
    define("NAME", 1000);

    echo NAME . '<br>';

    const ANIMALS = array('dog', 'cat', 'bird');

    foreach (ANIMALS as $item) {

        echo $item . '<br>';
    }


    ?>


</body>

</html>