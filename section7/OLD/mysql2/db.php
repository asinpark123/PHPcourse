<?php


$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    // if($connection){
    //     echo 'Connected';
    //     echo '<br><br>';
    // }
    // else{
    //     echo 'No connection';
    // }

    if(!$connection){
        echo 'Not connected';
        echo '<br><br>';
    }


    // Saving connection and connection-check into separate files require us to use 'include "db.php";' 
    // before the Queries to establish connection to the DB using this file

    // receiving information from the submitted forms 