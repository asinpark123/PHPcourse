<?php include 'functions.php';?>
<?php include 'db.php';?>
<?php updateCred();?>

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
                <h1 style="text-align: center;">Update</h1>
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

                <form action="login_read.php" method="post">
                    <input class="btn btn-primary" type="submit" name="read" value="Read">
                </form>

                <form action="login_create.php" method="post">
                    <input class="btn btn-primary" type="submit" name="create" value="Create">
                </form>

                <form action="login_delete.php" method="post">
                    <input class="btn btn-primary" type="submit" name="delete" value="Delete">
                </form>
            </div>
        </div>

    </body>

</html>