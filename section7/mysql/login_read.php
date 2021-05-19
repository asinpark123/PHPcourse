<!-- lecture 46 -->
<?php


$connection = mysqli_connect('localhost','root','','logindb'); 

if(!$connection){
    die("<h3 style='color: red;'>Cannot connect to database!</h3>");
}

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result){
    die('Query failed: ' . mysqli_error($connection));
}
else{
    echo "Query successful";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Read</title>
    <!-- Bootstrap 3.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-xs-6">

            <?php

                while($row = mysqli_fetch_assoc($result)){
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