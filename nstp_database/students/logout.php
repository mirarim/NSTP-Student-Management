<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page (index.php in your case)
header("Location: ../index.php");
exit();
?>