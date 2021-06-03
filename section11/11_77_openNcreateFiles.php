<?php
$file = "example.txt";

// different prefixes for fopen();
// Refer to the prefix list below
// On a Mac, you need to make sure you have give Apache permission to read and write to the folder
$handle = fopen($file, 'w');        // $handle will return whether it succeeded or not

// Close file via $handle after you've finished working with it
fclose($handle);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen(); prefixes</title>
</head>
<body>
    
</body>
</html>
<h1>fopen(); prefixes</h1>
<p>
    'r'	    Open for reading only; place the file pointer at the beginning of the file.
    <br><br>
    'r+'	Open for reading and writing; place the file pointer at the beginning of the file.
    <br><br>
    'w'	    Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
    <br><br>
    'w+'	Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
    <br><br>
    'a'	    Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
    <br><br>
    'a+'	Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
    <br><br>
    'x'	    Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen call will fail by returning false and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL
    <br><br>
    'x+'	Create and open for reading and writing; place the file pointer at the beginning of the file. If the file already exists, the fopen call will fail by returning false and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL
    <br><br>
</p>