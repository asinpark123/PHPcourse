<?php include 'db.php';?>
<?php include 'functions.php';?>

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
                <h1 style="text-align: center;">Read</h1>
                <?php readAll(); ?>
                <form action="login_create.php" method="post">
                    <input class="btn btn-primary" type="submit" name="create" value="Create">
                </form>

                <form action="login_update.php" method="post">
                    <input class="btn btn-primary" type="submit" name="update" value="Update">
                </form>

                <form action="login_delete.php" method="post">
                    <input class="btn btn-primary" type="submit" name="delete" value="Delete">
                </form>

            </div>
        </div>

    </body>

</html>