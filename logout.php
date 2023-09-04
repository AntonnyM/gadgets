<?php
session_start();

 // If the user is logged in, delete session variables and redirect to the home page
 if (isset($_SESSION['loggedin']))
 {
 $_SESSION = array();
 session_destroy();
}

// Redirect to the home page
// $home_url = dirname($_SERVER['PHP_SELF']);
header('Location: login.php');
exit;
?>