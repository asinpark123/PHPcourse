<!-- lecture 45 -->
<?php

if(isset($_POST["submit"])){
    $connection = mysqli_connect('localhost','root','','logindb'); 
    $id = $_POST["username"];
    $pw = $_POST["password"];
    
    if(!$connection){
        die("<h3 style='color: red;'>Cannot connect to database!</h3>");
    }

    $query = "INSERT INTO users(username,password)";
    $query .= "VALUES ('$id','$pw')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('Query failed: ' . mysqli_error($connection));
    }
    else{
        echo "Query successful";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 3.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            <h1>Login</h1>
            <form action="login_create.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit">
                </div>
            </form>
        </div>
    </div>

</body>
</html>