<?php
// echo $_POST . '<br>';
// innitial value of $_POST is 'Array'
// isset checks if the parameter matches the value of the associative-array-turned super variable $_POST
if(isset($_POST['Array'])){
    echo '';
}
elseif(isset($_POST['submit'])){
    $password =  $_POST['password'];
    $username =  $_POST['username'];

    echo 'Hello ' . $username . ' your password is: ' . $password;
    echo '<br>';
    echo '<br>';
}
elseif(isset($_POST[null])){
    echo 'null error';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST and Accessing information on submitted Forms</title>
</head>

<body>
    <h1>Section 6: Form POST and Accessing information on submitted Forms</h1>

    <form action="6_33_checkFormSubmission.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <br>
        <br>
        <!-- When you click on submit all the information inside the form tag will be sent under the set name.
        name is stored inside the super variable $_POST -->

        <input type="submit" name="submit">
    </form>


</body>

</html>