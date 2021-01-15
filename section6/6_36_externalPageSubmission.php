<?php

// All HTML has been deleted from this file, since it's just a validation page apparently 

if(isset($_POST['submit'])){
    $names = array('AhShin', 'student','Peter', 'Samid', 'Parker', 'Tim', 'Ome', 'Christina', 'staff');
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
        else{
            if(!in_array($username,$names)){
                echo 'Hello private user ' . $username . '<br>';
                echo '        <form action="6_35_validatingFormValues.php" method="POST">
                <input type="submit" value="Return Home" name="return">
                </form>';
                echo '<br>';
            }
            elseif(in_array($username,$names)){
                echo 'Hello special user <i>' . $username . '</i>';
                echo '<br>';
                
            }
        }
    }
    
    elseif(isset($_POST[null])){
        echo 'null error';
    }


?>