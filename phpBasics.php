<?php
// Variables
$name = "Hannah";
$age = 29;

// Arrays
$fruits = ["Apple", "Banana", "Cherry"];
$prices = ["apple" => 1.99, "banana" => 0.99];

// Echo
echo "Hello, $name! You are $age years old.";

// Arithmetic Operators
$total = 5 * 3; 
echo "Total: $total";

// String Concatenation
$fullname = "Hannah" . " " . "Alkenbrack";
echo $fullname;

// Comparison Operator
echo (5 <=> 10); // Outputs: -1 (5 is less than 10)

// Logical Operator
$is_admin = true;
if ($is_admin && $age > 18) {
    echo "Access granted.";
}
?>
