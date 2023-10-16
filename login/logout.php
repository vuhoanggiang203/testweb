<?php 

session_start();

// Clear the session variables
session_unset();
session_destroy();

// Redirect to the initial page
header('Location: ../index.php');
exit;

?>