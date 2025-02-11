<?php
// Function with Parameters and Return Value
function add($a, $b) {
    return $a + $b;
}
echo add(3, 5); // Outputs: 8

// Global Variable
$globalVar = "Hello";
function showGlobal() {
    global $globalVar;
    echo $globalVar;
}
showGlobal();

// Static Variable
function counter() {
    static $count = 0;
    $count++;
    echo $count;
}
counter(); // 1
counter(); // 2

// Default Parameters
function greet($name = "Guest") {
    echo "Hello, $name!";
}
greet(); // Hello, Guest!

?>
