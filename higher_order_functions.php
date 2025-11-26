<?php
// Built in heigher order functions are, filter,map, reduce.
// Define a function that accepts a user-defined callback to display a greeting message.
function showMessage($callback) {
    // Call the user-defined function
    $callback();
}
function greet() {
    echo "Hello! Welcome to PHP world!";
}
showMessage('greet');

// Define a callback function to welcome a user by name.
function greetUser($callback, $name) {
    echo $callback($name);
}
function welcome($name) {
    return "Welcome, $name!";
}
greetUser('welcome', 'Asif');
// callback to calculate a custom mathematical operation.
function calculate($a, $b, $callback) {
    return $callback($a, $b);
}
function add($x, $y) {
    return $x + $y;
}
function multiply($x, $y) {
    return $x * $y;
}
echo "Addition: " . calculate(5, 3, 'add') . "<br>";
echo "Multiplication: " . calculate(5, 3, 'multiply');
// Use a user-defined callback function to calculate tax on prices.
function applyTax($callback, $price) {
    return $callback($price);
}
function addTax($amount) {
    return $amount + ($amount * 0.15);
}
echo "Final Price: " . applyTax('addTax', 2000);

?>
