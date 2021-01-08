<?php

// receiving information from the submitted forms
if(isset($_POST['Array'])){
    echo '';
}
elseif(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connecting to the Database - important
    // mysqli_connect(serverName, username, password, databaseName);
    
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection){
        echo 'We have connection';
        echo '<br>';
    }
    else{
        echo "We don't have connection";
        echo '<br>';
    }


    // Dealing with received form data

    // if($username && $password){
    //     echo 'Hello ' . $username . ', your password is: ' . $password;
    //     echo '<br>';
    // }
    // if(!$password){
    //     echo 'Please enter a password';
    //     echo '<br>';
    // }
    // if(!$username){
    //     echo 'Please enter your username';
    //     echo '<br>';
    // }
    // else{
    //     echo 'Error';
    //     echo '<br>';
    // }


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


        <title>Login Page (part 1)</title>
    </head>

    <body>
        <h2>Login Page (part 1)</h2>

        <!-- We are using Bootstrap classes to style our page here -->
        <div class="container">
            <div class="col-sm-6">
                <form action="login.php" method="POST">
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
