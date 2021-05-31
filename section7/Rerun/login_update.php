<!-- lecture 47~50 -->
<?php 
include "db.php";
include "functions.php";

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', password = '$password'";
    // no quote marks for id because it's an integer not string
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if(!$result){
        echo "Query failed: " . mysqli_error($connection);
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
            <form action="login_update.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                    <br>
                    <select name="id" id="id">
                        <?php
                            getData()
                        ?>

                    </select>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>

</body>
</html>