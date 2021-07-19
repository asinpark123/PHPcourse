<?php

// Standard way of connecting to DB


// $host = 'localhost';
// $db_name = 'cms';
// $connection = mysqli_connect($host,'root','', $db_name);

// if(!$connection){
//     echo '<p style="color: red; font-weight: 700">Failed to connect to the database!</p>';
// }


// More secure way to connect to the DB
// Put all our connection credentials inside an array and define each item as constant

$db['db_host'] = 'localhost';
$db['db_id'] = 'root';
$db['db_pw'] = '';
$db['db_name'] = 'cms';

foreach($db as $key => $value){
    // use function define(); to create constants and change to UPPERCASE
    // each of the array elements will now be defined as Constants
    define(strtoupper($key),$value);
}

$connection1 = mysqli_connect(DB_HOST, DB_ID, DB_PW, DB_NAME);
if(!$connection1){
    echo "<strong><span style = 'color: red;'>Cannot connect to the database!</span></strong>";
}





?>