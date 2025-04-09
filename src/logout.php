<?php

session_start();

$_SESSION = array(); // Clear all session variables

session_destroy(); // Destroy the session

header("Location: log_in.php"); // Redirect to the login page

exit(); // Ensure no further code is executed
//
?>