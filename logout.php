<?php
session_start(); // Start a session (if not already started)

// Destroy the session (log out)
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();
?>
