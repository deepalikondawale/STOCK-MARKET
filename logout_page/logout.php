<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../homepage/home.html");
exit;

require_once "../visiting_pages/visitor.php";
?>
