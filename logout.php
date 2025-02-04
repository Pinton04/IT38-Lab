<?php
// Include config file
require_once "db/config.php";

// Initialize the session
session_start();

// Destroy session and log the user out
$_SESSION = array();
session_destroy();

// After logging out, redirect to login page (index.php or login page of your choice)
header("location: ./index.php");
exit;
?>
