<?php

if(isset($_POST['name'])){
    $name = $_POST["name"];
    echo $name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Supervariable</title>
</head>
<body>
    <h1>POST Supervariable</h1>
    <form action="9_61_POSTsuperGlobals.php" method="POST">
        <input type="text" name="name">

        <input type="submit">


    </form>
    
</body>
</html>