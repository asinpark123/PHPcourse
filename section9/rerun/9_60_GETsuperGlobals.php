

<?php

print_r($_GET);

$id = 10;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using GET</title>
</head>
<body>
<h1>Using GET super GLOBAL</h1>

<a href="9_60_GETsuperGlobals.php?id=200">CLICK HERE</a>

<br><br><br>

<a href="9_60_GETsuperGlobals.php?id=<?php echo $id; ?>">DYNAMIC</a>

<br><br><br>

<a href="9_60_GETsuperGlobals.php" style="text-transform: uppercase;">Initialise</a>

</body>
</html>