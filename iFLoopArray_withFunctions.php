<?php
// Definition of Full Path & relative Path
// mproject\iFLoopArray.php                // Copy Curent path = Current Folder & Current File
// C:\Users\HS TRADER\Herd\mproject\iFLoopArray.php        // Copy Path = Absolute full path
// <---------------------------------------------------------------------------------------------->
// If file is in different folders
// require_once "Another folder name/Tic_tac_toe.php";         // if one folder up
// require_once "../Tic_tac_toe.php";          // if two folders up
// require_once "../../Tic_tac_toe.php";       // if three folders up
// require_once __DIR__ . "/tic_tac/Tic_tac_toe.php";         // Absolute full path
// require_once "C:\Users\HS TRADER\Herd\mproject\iFLoopArray.php";     // Absolute full path

// <----------------------------------------------------------------------------------------------->
// Practice
// require_once "Tic_tac_toe.php";
//require "Tic_tac_toe.php";
// include_once "Tic_tac_toe.php";
//include "Tic_tac_toe.php";
//require_once "C:\Users\HS TRADER\Herd\mproject\Tic_tac_toe.php";
// <===============================================================================================================>
// Simple Loops
// Example 1:
$i = 5;
while($i > 0){
    echo $i."<br>";
    $i--;
}
// Example 2:
$balance = 100;
while ($balance > 0) {
    echo "Remaining balance: $balance <br>";
    $balance -= 20;
}
// Example 3:
$fruits = ["Apple", "Banana", "Cherry"];
$i = 0;

while ($i < count($fruits)) {
    echo $fruits[$i] . "<br>";
    $i++;
}

// Loops ==> With Multi dimensional Array 
// Example 1: Search record with any Key/Value
/*
function sarch($s){
    $emp = [['name'=>'asif','age'=>33,'email'=>'asif@g.com'],
            ['name'=>'amir','age'=>48,'email'=>'abcamir@g.com'],
            ['name'=>'saud','age'=>26,'email'=>'saud@g.com']];
    foreach ($emp as $e){
        if ($e['name'] === $s || $e['email'] === $s || $e['age'] === $s){// for if block only give particular true value or true Array
            $res = $e; // for if block only give particular true value or particular true inner Array.
        }    
    }
    return $res;
}
$result = sarch(26);
print_r($result);
echo "<br>";
// Example 2: Search record Having keys for inner arrays in Multidimensional Array
function Search($s){
    $emp = ['for Asif' => ['name'=>'asif','age'=>33,'email'=>'asif@g.com'],
            'for Amir' => ['name'=>'amir bhai','age'=>48,'email'=>'abcamir@g.com'],
            'for saud' => ['name'=>'saud B','age'=>26,'email'=>'saud@g.com']];
    foreach ($emp as $keys => $e){
        if ($e['name'] === $s || $e['email'] === $s || $e['age'] === $s || $keys === $s){// for if block only give particular true value
            $res = $e; // for if block only give particular true value or particular true Array.
        }    
    }
    return $res;
}
$result = Search('for Asif');
print_r($result);
echo "<br>"; 
// Example 3: Search for Multi Type information
function serch($s) {
    $emp = [
        'Personal_info' => [
            ['name'=>'asif','age'=>33,'email'=>'asif@g.com'],
            ['name'=>'amir','age'=>48,'email'=>'abcamir@g.com'],
            ['name'=>'saud','age'=>26,'email'=>'saud@g.com']
        ],
        'Work_info' => [
            ['name'=> 'asif', 'role' => 'software'],
            ['name'=> 'amir', 'role' => 'web'],
            ['name'=> 'saud', 'role'=> 'designer']
        ]
    ];
    $res = null;
    $Cat_results = [];
    foreach ($emp as $category => $values) {
        foreach ($values as $e) {
            if (
                (isset($e['name']) && $e['name'] === $s) ||
                (isset($e['email']) && $e['email'] === $s) ||
                (isset($e['age']) && $e['age'] === $s) ||
                (isset($e['role']) && $e['role'] === $s) ||
                ($category === $s)
            ) {
                $Cat_results[] = $e + ['category' => $category];
            }
        }
    }
    // Return both results for clarity
    return $Cat_results;
}
$cat = serch('Personal_info');

print_r($cat);
echo "<br>"; */
// Example 4: if I want to add something all keys/Values
$search = 32;
$users = [
    ["name" => "mudasir", "age" => 21, "role" => "frontend"],
    ["name" => "mubashir RR", "age" => 26, "role" => "backend"],
    ["name" => "kashif Bahi", "age" => 32, "role" => "seo"],
];
$result = array_filter($users, function($user) use ($search) {
    return $user['name'] === $search || $user['role'] === $search || $user['age'] === $search;
});
echo "<pre>";
print_r($result);
echo "</pre>";


// if,elseif,switch ==> With Multi dimensional Array 
// Example:Password,Email Age Validation
$password = 'Ya7&*dde232dfg';
$email = 'abcy@w.m';// @alphabet.alphabet
$age = 49;
if(strlen($password) < 8){
    echo 'Password must be at least of 8 characters <br>';
}
elseif (!preg_match('/[a-z]/', $password)){
    echo 'must have one small letter <br>';
}
elseif (!preg_match('/[A-Z]/', $password)){
    echo 'must have atleast one capital letter <br>';
}
elseif (!preg_match('/[0-9]/', $password)){
    echo 'at least one number is required <br>';
}
elseif(!preg_match('/[^A-Za-z0-9]/', $password)){
    echo 'at least one symbol is required <br>';
}
elseif($age < 18){
    echo 'You are minor for this <br>';
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Invalid Email <br>';
} else {
    echo 'Form Submitted Successfully <br>';
}

// Example: Switch 
$Day = 1;
switch($Day){
    case 1: echo 'Monday <br>'; break;
    case 2: echo 'Tuesday';break;
    case 3: echo 'Wednesday';break;
    default: echo 'Invalid Day';
}
// Example: Display Next Action based on Order Status Flow
$order_status = 'hold';
switch($order_status){
    case 'processing': echo 'Order will be Placed in 2 days';break;
    case'hold': echo 'order is on hold';break;
    case'cancelled': echo 'order is cancelled';break;
    case'delievered': echo 'order is deleivered';break;
    default: echo 'invalid order';

}


// Both Loops & if,elseif ==> With Multi dimensional Array 

// Loop with break and continue Statements
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue; // skip 3
    if ($i == 5) break;    // stop at 5
    echo "Number: $i <br>";
}
// While loop for Simple Blog Post

// Use All (Loops & ifelseif, Multi dimensional Array) ==> In Function






















?>