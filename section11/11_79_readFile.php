<?php

$file = "example.txt";
$handle = fopen($file, 'r+');

if($handle){

    // Use fread($handle, Byte); to read from file and save to variable
    // Each character costs a Byte, so our code will need at least 12 bytes to echo all characters
    // $content = fread($handle, 12);
    // We can find the filesize by using filesize("fileName");
    $content = fread($handle, filesize($file));
    echo $content;

} else {
    echo "Could not read/write to the file.";
}



fclose($handle);

?>