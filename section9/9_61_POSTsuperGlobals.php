<?php


if(isset($_POST['submit'])){
    echo $_POST['name'];
}


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POST Super Global</title>
    </head>

    <body>

        <form action="9_61_POSTsuperGlobals.php" method="POST">

            <input type="text" name="name">
            <input type="submit" name="submit">

        </form>

    </body>

</html>