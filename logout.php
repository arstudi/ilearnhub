<?php
include 'connect.php';
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies

// Redirect to the login page or any other appropriate page after logout
header("Location: login.php"); // Replace 'login.php' with your desired page
exit();
?>
