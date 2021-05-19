<?php include "db.php";

// We have put the below connection fn and connection-check into a separate file: db.php

// $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
// if($connection){
//     echo 'We have connection';
//     echo '<br>';
// } else{
//     echo "We don't have connection";
//     echo '<br>';
// }

// We will recall contents of the db.php using 'include "db.php";'


// Queries
    $query = 'SELECT * FROM users';

    // Sending Query to fetch
    $result = mysqli_fetch_assoc($connection, $query);
    if(!$result){
        die("Query FAILED" . mysqli_error($result));
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
              crossorigin="anonymous">

        <title>Login Page - Update (part 4)</title>
    </head>

    <body>
        <h2>Login Page - Update (part 4)</h2>
        <div class="container">
            <div class="col-sm-6">
                <form action="login_create.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>

                    <!-- This part is crucial to pick row ID from tables -->
                    <div class="form-group">
                        <select name="id" id="">

                            <?php
                        
                            // Using the data fetched from DB
                            while($row = mysqli_fetch_assoc($result)){
                                // store the row ID by searching key 'id' from the associative array $row
                                $id = $row['id'];

                                // we can now use the fetched ID number in $id to dynamically change that specific row fetched
                                echo "<option value='$id'>$id</option>";
                            }

                            ?>
                        </select>

                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">

                </form>
            </div>
        </div>

    </body>

</html>