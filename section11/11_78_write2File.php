<?php

$file = "example.txt";
$handle = fopen($file, 'w+');

if($handle){
    $text = 'Hello world!';
    // by default the code will continue to overwrite, will NOT concatinate on top of what's already there
    // pointer will initialise to the beginning of the document on each call unless specified
    $text = 'How are you?';

    // use the fwrite($handle, $text); to write to a file
    fwrite($handle, $text);

} else {
    echo "Could not read/write to the file.";
}



fclose($handle);

?>