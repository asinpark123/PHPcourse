<?php

// receiving information from the submitted forms

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

// Checking connection
if($connection){
    echo 'We have connection';
    echo '<br>';
}
else{
    echo "We don't have connection";
    echo '<br>';
}

// QUERIES
$query = "SELECT * FROM users";

// Sending query to fetch
$result = mysqli_query($connection, $query);

    if(!$result){
        die('Query FAILED' . mysqli_error($result));
        echo '<br>';
    }
    else{
        echo 'Values fetched from the database';
        echo '<br>';
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page - Read (part 3)</title>
    </head>

    <body>
        <h2>Login Page - Read (part 3)</h2>

        <div class="container">
            <div class="col-sm-6">
                <?php

                // We want to fetch whatever we have just put into $result using WHILE loop
                // mysqli_fetch_row(mysqli_query($connection, $query))
                
                // while($row = mysqli_fetch_row($result)){
                //     print_r($row);
                // }


                // mysqli_fetch_assoc(mysqli_query($connection, $query)) - returns an associative array
                
                // while($row = mysqli_fetch_assoc($result)){
                //     print_r($row);
                // }
                
                // This is the best way to present the returned values, using <pre></pre>
                while($row = mysqli_fetch_assoc($result)){
                    ?>

                <pre>

                    <?php

                    print_r($row);
                    echo '<br>';
                    ?>

                </pre>


                <?php
                
                }

                ?>



            </div>
        </div>

    </body>

</html>