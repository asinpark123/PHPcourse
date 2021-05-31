<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection){
        die('Connection FAILED' . mysqli_error($connection));
    }
?>