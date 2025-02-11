<?php
// String Functions
$name = "Hannah";
echo strlen($name); // Length of string

// Regex Validation (Email)
$email = "user@example.com";
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Valid email!";
} else {
    echo "Invalid email!";
}

// Header Redirect
header("Location: welcome.php");
exit();
?>
