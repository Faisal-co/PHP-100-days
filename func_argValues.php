<?
/* Real Life Statements Problems
Building a billing system that needs to total any number of product prices passed to it.
Sending one message to multiple users — the number of users can change dynamically.
A function should log messages with any number of details (user, action, status, timestamp).
Calculate tax for any number of income sources (salary, bonus, freelancing, etc.)
Merge multiple user lists (from database, CSV, API) into one array.
Allow searching with any number of optional filters — name, age, city, etc.
You want to pass all arguments from one function to another automatically.
*/
// Functions Arguments Unlimited Values Using the splat operator (...)
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}
echo sum(1, 2, 3, 4, 5);
// With noemal fix Argument
function introduce($greeting, ...$names) {
    foreach ($names as $name) {
        echo "$greeting, $name!<br>";
    }
}
introduce("Hello", "Asif", "Amir", "Saud");
// Example 3:
function introduce($greeting, ...$names) {
    foreach ($names as $name) {
        echo "$greeting, $name!<br>";
    }
}
introduce("Hello", "Asif", "Amir", "Saud");
// Example 4:
function showAll() {
    $args = func_get_args(); // gets all passed arguments as array
    foreach ($args as $a) {
        echo $a . "<br>";
    }
}
showAll('apple', 'banana', 'mango');
// Example 4:
function multiply($a, $b, $c) {
    return $a * $b * $c;
}
$values = [2, 3, 4];
echo multiply(...$values); // same as multiply(2,3,4)


?>