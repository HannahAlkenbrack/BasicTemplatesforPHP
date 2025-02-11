<?php
// Setting a cookie
setcookie("user", "Hannah", time() + (86400 * 7), "/"); // Expires in 7 days

// Retrieving a cookie
$user = $_COOKIE['user'] ?? 'Guest';
echo "Welcome, $user!";

// Starting a session
session_start();
$_SESSION['username'] = "Hannah";

// Retrieving session data
echo "Logged in as: " . $_SESSION['username'];

// Destroying a session
session_unset();
session_destroy();
?>
