<?php

$username;
$password;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost','root','','loginapp');

    if($connection){
        if($username && $password){
            
    
            echo 'Yes we are connected';
            echo '<br>';
            echo '<br>';
            echo 'Hello ' . $username . ', your password is: ' . $password;
            echo '<br>';
            echo '<br>';
        }
        else{
            echo 'Username or password not set';
        }
    }
    else{
        die('Database connection failed');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Login - part 1</title>
    </head>

    <body>

        <div class="container">
            <div class="col-sm-6">
                <form class="form-control" action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>

    </body>

</html>