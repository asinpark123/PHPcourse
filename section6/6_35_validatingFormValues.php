<?php
// echo $_POST . '<br>';
// innitial value of $_POST is 'Array'
// isset checks if the parameter matches the value of the associative-array-turned super variable $_POST

if(isset($_POST['Array'])){
    echo '<h3 style="color: black;">Username must be between ' . $minCharID . ' and ' . $maxCharID . ' characters long</h3>';
    echo '<br>';
}

elseif(isset($_POST['submit'])){
    $names = array('AhShin', 'student','Peter', 'Samid', 'Parker', 'Tim', 'Ome', 'Christina', 'staff');
    // store ID and PW values inside variables to use them dynamically
    $username = $_POST['username'];
    $password = $_POST['password'];
    $lenID = strlen($username);
    $lenPW = strlen($password);
    
    $minCharID = 4;
    $minCharPW = 6;
    $maxCharID = 15;
    $maxCharPW = 20;


    if($lenID < $minCharID){
        echo '<h3 style="color: red;">Username is too short<br>Username must be between ' . $minCharID . ' and ' . $maxCharID . ' characters long</h3>';
        echo '<br>';
    }
    elseif($lenID > $maxCharID){
        echo '<h3 style="color: red;">Username is too long<br>Username must be between ' . $minCharID . ' and ' . $maxCharID . ' characters long</h3>';
        echo '<br>';
    }
    
    if($lenPW < $minCharPW){
        echo '<h3 style="color: red;">Password is too short<br>Password must be between ' . $minCharPW . ' and ' . $maxCharPW . ' characters long</h3>';
        echo '<br>';
    }
    elseif($lenPW > $maxCharPW){
        echo '<h3 style="color: red;">Password is too long<br>Password must be between ' . $minCharPW . ' and ' . $maxCharPW . ' characters long</h3>';
        echo '<br>';
    }
    
    // Seeing if the user is one of those stored in the array
    // Using the in_array(Value, Array) function to search, returns boolian
    if(!in_array($username,$names)){
        echo 'Hello user ' . $username;
        echo '<br>';
    }
    elseif(in_array($username,$names)){
        echo 'Hello special user ' . $username;
        echo '<br>';
        
    }
    // else{
        //     echo 'Hello ' . $username . ' your password is: ' . $password;
        //     echo '<br>';
        // }
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
    <title>Form validation</title>
</head>

<body>
    <h1>Form validation</h1>

    <!-- we created a new form in the next class and therefore have changed the action link -->

    <!-- <form action="6_35_validatingFormValues.php" method="POST"> -->
    
    <form action="6_36_externalPageSubmission.php" method="POST">
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