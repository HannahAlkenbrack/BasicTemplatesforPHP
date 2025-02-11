<?php
// Custom error handler
function customError($errno, $errstr) {
    echo "Error [$errno]: $errstr";
}
set_error_handler("customError");

// Trigger an error
echo 10 / 0;

// Try-Catch for Exception Handling
try {
    throw new Exception("Something went wrong!");
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}

// Logging errors
error_log("This is a custom error message", 3, "errors.log");
?>
