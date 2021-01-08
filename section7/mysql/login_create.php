<?php

// receiving information from the submitted forms
if(isset($_POST['Array'])){
    echo null;
}
elseif(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connecting to the Database - important
    // mysqli_connect(serverName, username, password, databaseName);
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

    // This is the start of class 45
    // Here we are writing SQL queries
    // $query = "INSERT INTO dbName(column1, column2,...)";
    $query = "INSERT INTO users(username, password)";
    
    // .= is used to concatinate values onto an existing variable
    // variables still need to be quoted since they return strings
    $query .= " VALUES ('$username','$password')";
    
    // mysqli_query(connection, query); - prebuilt command to run query in our DB
    // Returns 1 if values are correctly assigned to it 
    // Assign what it returns into a variable so we can check it
    $result = mysqli_query($connection, $query);
    
        if(!$result){
            // die("message"); - kills all processes in the page
            // mysqli_error(mysqli_query(mysqli_query(connection, query)); - returns the error message received
            die('Query FAILED' . mysqli_error($result));
            echo '<br>';
        }
        else{
            echo 'Values inserted into database';
            echo '<br>';
        }
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


        <title>Login Page - Create (part 2)</title>
    </head>

    <body>
        <h2>Login Page - Create (part 2)</h2>

        <!-- We are using Bootstrap classes to style our page here -->
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
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>
            </div>
        </div>




    </body>

</html>
