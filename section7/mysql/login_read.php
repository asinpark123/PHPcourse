<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(!$connection){
        echo 'No connection!';
    }
    else{
        echo "we're connected" . "<br>";

        $query = "SELECT * FROM users ";
    
        $queryResult = mysqli_query($connection, $query);
        
        if(!$queryResult){
            die('Query FAILED' . mysqli_error($queryResult));
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Login - part 3</title>
    </head>

    <body>

        <div class="container">
            <div class="col-sm-6">
                <?php

                // while($row = mysqli_fetch_row($queryResult)){
                //     print_r($row);
                // }

                while($row = mysqli_fetch_assoc($queryResult)){

                    ?>
                <pre>
                <?php
                print_r($row);
                ?>
            </pre>
                <?php
                }
                ?>


            </div>
        </div>

    </body>

</html>