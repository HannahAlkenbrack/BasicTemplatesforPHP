<?php
// Getting Data from URL
$name = $_GET['name'] ?? 'Guest';
echo "Hello, $name!";

// Getting Data from Form
$username = $_POST['username'] ?? '';
echo "Logged in as: $username";

// Using Cookies
setcookie("user", "Hannah", time() + 3600, "/");

// Using Sessions
session_start();
$_SESSION['user'] = "Hannah";
echo "Session User: " . $_SESSION['user'];
?>
