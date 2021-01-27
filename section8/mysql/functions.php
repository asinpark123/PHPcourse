<?php
include 'db.php';

function showCred(){
    global $connection;
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
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
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

function deleteCred(){
    if(isset($_POST['submit'])){

        global $connection;
        $id = $_POST['id'];

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
                                
                // we must senatise our inputs before allowing them to run/submit
                // use mysqli_real_escape_string($connection, $stringVar); feed the senatised values back into their respective variables
                $username = mysqli_real_escape_string($connection, $username);
                $password = mysqli_real_escape_string($connection, $password);
                
                // create $hashFormat
                // $hashFormat = "$format$numberOfTimesToRun$";
                $hashFormat = "$2y$10$";
                // then create $salt, $salt string must be at least 22 char long
                $salt = "iusesomecrazystrings22";
                // concatinate $hashFormat and $salt
                $hashedSalt = $hashFormat . $salt;
                // now use crypt(); to encrypt PW
                $password = crypt($password, $hashedSalt);
                                
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