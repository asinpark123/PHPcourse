<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defining Functions</title>
</head>

<body>
    <?php

    function init()
    {
        saySomething();
        echo "<br>";
        addSomething(123, 45);
    }
    // init();

    function saySomething()
    {
        echo "Calculating..." . "<br>";
    }

    function addSomething($a, $b)
    {
        $sum = $a + $b;
        return $sum;
    }



    $sum1 = addSomething(12, 53);
    $sum1 = addSomething(55, $sum1);
    echo $sum1;

    ?>
</body>

</html>