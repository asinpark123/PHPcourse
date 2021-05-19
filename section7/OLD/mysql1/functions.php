<?php
include 'db.php';

// we created a function to run our queries, code straight from login_update.php

function showCred(){
    global $connection;
    // make sure $connection is global, use global to plug in variables from other places
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

function updateCred(){
    if(isset($_POST['submit'])){

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        // we've already pulled the data from DB, time to update
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";
        // no quote marks around $id because it's an INTeger
        $queryResult = mysqli_query($connection, $query);
        if(!$queryResult){
            mysqli_error($queryResult);
            die("Query FAILED" . mysqli_error($connection));
        }
        else{
            echo 'Query SUCCESSFUL';
        }
    }
}

function deleteCred(){
    if(isset($_POST['submit'])){

        global $connection;
        $id = $_POST['id'];

        // we've already pulled the data from DB, time to delete
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";
        $queryResult = mysqli_query($connection, $query);
        if(!$queryResult){
            mysqli_error($queryResult);
            die("Query FAILED" . mysqli_error($connection));
        }
        else{
            echo 'Query SUCCESSFUL';
        }

    }
}

function createRow(){

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        global $connection;

        if($connection){
            if($username && $password){
                                
                $query = "INSERT INTO users(username,password) ";
                $query .= "VALUES ('$username','$password')";

                $queryResult = mysqli_query($connection, $query);

                if(!$queryResult){
                    die('Query FAILED' . mysqli_error($queryResult));
                }
                elseif($queryResult){
                    echo "Query SUCCESSFUL";
                }
            }
            else{
                echo 'Invalid username or password';
            }
        }
        else{
            die('Database connection failed');
        }
    }
}

function readAll(){
    global $connection;

    $query = "SELECT * FROM users ";

    $queryResult = mysqli_query($connection, $query);
        
    while($row = mysqli_fetch_assoc($queryResult)){

        ?>
<pre>
    <?php
    print_r($row);
    ?>
</pre>
<?php
    }
    
}
?>