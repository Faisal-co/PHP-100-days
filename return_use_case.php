<?php

// Example 1 Use of return inside a foreach loop
function number($numbers, $target) {
    foreach ($numbers as $num) {
        if ($num === $target) {
            return "Number found: $num";
        }
    }
    return "Number not found.";
}
$list = [10, 20, 30, 40];
echo number($list, 30);
// Example 2 Use of return when a match is found in an associative array 
function find_user($users, $search_name) {
    foreach ($users as $name => $age) {
        if ($name === $search_name) {
            return "User $name is $age years old.";
        }
    }
    return "User not found.";
}
$users = ['Ali' => 25, 'Sara' => 30, 'Faisal' => 35];
echo find_user($users, 'Sara');

// Example 3 Use of return direct inside from loop
function numbers($numbers) {
    foreach($numbers as $num){
        return 'numbers are:'.$num
    }
}
$list = [10, 20, 30, 40];
echo numbers($list);


?>