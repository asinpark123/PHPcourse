<?php
$id = 10;
// we wanted to have a look at how to edit the variable via URL
print_r($_GET); 

// http://localhost/phpcourse/section9/9_60_GETsuperGlobals.php?id=10&source=reports

// ? separates the parameter
// & adds variables into the same parameter

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET Super Global</title>
    </head>

    <body>

        <!-- we have created a button here that will assign 100 to the variable 'id' and send it to the $_GET super global -->
        <a href="9_60_GETsuperGlobals.php?id=100">Click Here</a>

        <br><br><br>

        <!-- Below does the same but dynamically -->
        <a href="9_60_GETsuperGlobals.php?id=<?php echo $id ?>">Click again</a>

    </body>

</html>