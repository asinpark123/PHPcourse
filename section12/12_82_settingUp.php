<?php

// We need to start output buffering
ob_start();
// Below redirects us to another page
header("Location: index.php");
// If we use the header(); function and do not manually start output buffering, it will return an error

?>