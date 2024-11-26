<?php
session_start(); // Start or resume the session

// Check if user is logged in and in 'user' mode
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    // User is in 'user' mode
    // Proceed with user-specific functionality or display
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in as a user.";
    header("Location:index.php");
    
} else 
{
 // Redirect to login page or show appropriate message
 header("Location: login.php");
 exit();
}
   


?>