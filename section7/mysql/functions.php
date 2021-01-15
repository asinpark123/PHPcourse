<?php
include 'db.php';
 
// we created a function to run our queries

function showCred(){
    // make sure $connection is global, use global to plug in variables from other places
    global $connection;
    // pulls all data from users table
    $query = "SELECT * FROM users ";
    $queryResult = mysqli_query($connection, $query);
    
    if(!$queryResult){
        die('Query FAILED' . mysqli_error($queryResult));
    }
    
    while($row = mysqli_fetch_assoc($queryResult)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

?>