<?php
/*
// Problem 1: Count how many students have < 75% attendance across classes.
$students = [
    ['name' => 'Ali', 'attendance' => [90, 80, 100]],
    ['name' => 'Sara', 'attendance' => [70, 65, 60]],
    ['name' => 'John', 'attendance' => [85, 90, 95]],
];
foreach ($students as $s) {
    $avg = array_sum($s['attendance']) / count($s['attendance']);
    $status = ($avg < 75) ? "Warning (Low Attendance)" : "Good Standing";
    echo "{$s['name']} → $avg% → $status<br>";
}
echo '<br>';
Problem 2:Student Marks & Average Report
Each student has marks in multiple subjects. Print each student’s marks and average.
*/
$students = [
    "Ali" => ["Math" => 80, "English" => 75, "Science" => 90],
    "Sara" => ["Math" => 65, "English" => 85, "Science" => 70],
    "Mina" => ["Math" => 92, "English" => 88, "Science" => 94],
];
foreach ($students as $name => $subjects) {
    echo "Student: $name<br>";
    $total = 0;
    $count = 0;
    foreach ($subjects as $subject => $marks) {
        echo "- $subject: $marks<br>";
        $total += $marks;
        $count++;
    }
    $avg = $total / $count;
    echo "Average Marks: $avg<br><br>";
}
/* Problem 2: E-commerce Order Items
*/
$orders = [
    ["id" => 101, "items" => [["name" => "Shirt", "price" => 1500], ["name" => "Shoes", "price" => 3500]]],
    ["id" => 102, "items" => [["name" => "Watch", "price" => 5000], ["name" => "Cap", "price" => 700]]],
];
foreach ($orders as $order) {
    $total = 0;
    echo "Order ID: {$order['id']}<br>";

    foreach ($order['items'] as $item) {
        echo "- {$item['name']}: Rs. {$item['price']}<br>";
        $total += $item['price'];
    }
    echo "Order Total: Rs. $total<br><br>";
}
/* Problem 3:Generate multiplication table 1–5.
*/
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<hr>";
}

/* Problem 4:Nested Loop with Conditional — Grade Evaluation
Show if each student passes each subject.
*/
$students = [
    "Ali" => ["Math" => 85, "Science" => 40, "English" => 90],
    "Sara" => ["Math" => 45, "Science" => 70, "English" => 60],
];
foreach ($students as $name => $subjects) {
    echo "$name:<br>";
    foreach ($subjects as $subject => $marks) {
        if ($marks >= 50)
            echo "- $subject: Pass ($marks)<br>";
        else
            echo "- $subject: Fail ($marks)<br>";
    }
    echo "<br>";
}
/* Problem :Warehouse Inventory by Category
Each category contains multiple products; print products below minimum stock (10 units).
*/
$inventory = [
    "Electronics" => [["TV" => 5], ["Laptop" => 20], ["Mobile" => 8]],
    "Groceries" => [["Rice" => 50], ["Sugar" => 7], ["Salt" => 3]]
];

foreach ($inventory as $category => $items) {
    echo "Category: $category<br>";
    foreach ($items as $product) {
        foreach ($product as $name => $stock) {
            if ($stock < 10)
                echo "- $name (Low stock: $stock)<br>";
        }
    }
    echo "<br>";
}
// Stars inverted triangle (5 to 1 stars).
$rows = range(5, 1);
foreach ($rows as $r) {
    $stars = array_fill(0, $r, '*');
    echo implode(' ', $stars) . "<br>";
}
// Stars Pyramid Pattern (Centered)
$rows = range(1, 5);
foreach ($rows as $r) {
    $spaces = str_repeat('&nbsp;', 5 - $r);
    $stars = str_repeat('* ', $r);
    echo $spaces . $stars . "<br>";
}
// Stars Dimond Pattern
$rows = range(1, 5);
// Upper part
foreach ($rows as $r) {
    $spaces = str_repeat('&nbsp;', 5 - $r);
    $stars = str_repeat('* ', $r);
    echo $spaces . $stars . "<br>";
}
// Lower part
$reverseRows = array_reverse($rows);
foreach ($reverseRows as $r) {
    $spaces = str_repeat('&nbsp;', 5 - $r);
    $stars = str_repeat('* ', $r);
    echo $spaces . $stars . "<br>";
}
/* Problem: Matrix Addition (2D Array Calculation)
*/
$A = [[1,2,3],[4,5,6],[7,8,9]];
$B = [[9,8,7],[6,5,4],[3,2,1]];
$C = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
// Nested while Loop,Multiplication Table (Simple Nested While)
$i = 1;

while ($i <= 5) {
    echo "<b>Table of $i</b><br>";

    $j = 1;
    while ($j <= 10) {
        echo "$i x $j = " . ($i * $j) . "<br>";
        $j++;
    }

    echo "<hr>";
    $i++;
}
// Use Nested while loop to print triangle of stars.
$row = 1;
while ($row <= 5) {
    $col = 1;
    while ($col <= $row) {
        echo "* ";
        $col++;
    }
    echo "<br>";
    $row++;
}
// Nested While loop through 2D Array, Display student marks (using while inside while).
$students = [
    ["Ali", [85, 90, 80]],
    ["Sara", [75, 60, 70]],
    ["John", [88, 78, 92]],
];
$i = 0;
while ($i < count($students)) {
    echo "Student: {$students[$i][0]}<br>";   
    $j = 0;
    while ($j < count($students[$i][1])) {
        echo "- Subject " . ($j + 1) . ": {$students[$i][1][$j]}<br>";
        $j++;
    }
    echo "<br>";
    $i++;
}
// Nested While loop Password Generate Grid random alphanumeric grid of 4x5
$rows = 4;
$cols = 5;
$r = 1;
while ($r <= $rows) {
    $c = 1;
    while ($c <= $cols) {
        echo chr(rand(65, 90)) . rand(0, 9) . " ";
        $c++;
    }
    echo "<br>";
    $r++;
}
//Nested While Loop Database Simulation,Loop through departments → employees(simulate SQL-like result).
$departments = [
    "HR" => ["Ali", "Sara"],
    "IT" => ["John", "Mina", "Zara"]
];
$keys = array_keys($departments);
$i = 0;
while ($i < count($keys)) {
    $dept = $keys[$i];
    echo "<b>Department: $dept</b><br>";
    $employees = $departments[$dept];
    $j = 0;
    while ($j < count($employees)) {
        echo "- {$employees[$j]}<br>";
        $j++;
    }
    echo "<br>";
    $i++;
}
// Nested While with Conditionals, Chessboard 8x8
$row = 1;
while ($row <= 8) {
    $col = 1;
    while ($col <= 8) {
        if (($row + $col) % 2 == 0) {
            echo "<span style='background:black;color:white;'>■</span>";
        } else {
            echo "<span style='background:white;color:black;'>■</span>";
        }
        $col++;
    }
    echo "<br>";
    $row++;
}
// Prime numbers between 1 to 50
$n = 2;
while ($n <= 50) {
    $div = 2;
    $isPrime = true;
    while ($div <= sqrt($n)) {
        if ($n % $div == 0) {
            $isPrime = false;
            break;
        }
        $div++;
    }
    if ($isPrime) echo "$n ";
    $n++;
}








// Two Different Type of Informations blocks(Loop with Multi-Dimensional Array)
function search($s) {
    $emp = [
        'Personal_info' => [
            ['name' => 'asif', 'age' => 33, 'email' => 'asif@g.com'],
            ['name' => 'amir', 'age' => 48, 'email' => 'abcamir@g.com'],
            ['name' => 'saud', 'age' => 26, 'email' => 'saud@g.com']],
        'Work_info' => [
            ['name' => 'asif', 'role' => 'software'],
            ['name' => 'amir', 'role' => 'web'],
            ['name' => 'saud', 'role' => 'designer']]
    ];
    $results = [];
    // CASE 1: If user searches by Category name
    if (isset($emp[$s])) {
        // Return that entire category
        return $emp[$s];
    }
    // CASE 2: Search by name, email, age, or role
    foreach ($emp as $category => $values) {
        foreach ($values as $e) {
            // If value matches anywhere in record
            if (in_array($s, $e, true)) {
                // Append with category info
                $results[] = $e + ['category' => $category];
            }
        }
    }
    // If nothing found
    return !empty($results) ? $results : 'No match found.';
}
// --- Possible Searches ---
print_r(search('Personal_info')); // Fetch entire category
print_r(search('asif'));          // Find asif’s details from both categories
print_r(search('designer'));      // Find based on role
print_r(search(26));              // Find based on age




?>