<?php
// If-Else
$logged_in = true;
if ($logged_in) {
    echo "Welcome!";
} else {
    echo "Please log in.";
}

// Ternary Operator
$age = 20;
echo $age >= 18 ? "Adult" : "Minor";

// Switch Statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Almost weekend!";
        break;
    default:
        echo "Just another day.";
}

// Loops
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i ";
}

// Foreach Loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo $fruit;
}

// Include File
include 'header.php';
?>
