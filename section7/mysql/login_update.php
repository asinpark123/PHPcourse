<?php include 'functions.php';?>
<?php include 'db.php';?>


<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username' ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";
    // no quote marks around $id because it's an INTeger

}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Login - part 4</title>
    </head>

    <body>

        <div class="container">
            <div class="col-sm-6">
                <form class="form-control" action="login_update.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <select name="id" id="">
                            <option value="">id</option>

                            <?php

                            showCred();

                            ?>


                        </select>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>

    </body>

</html>