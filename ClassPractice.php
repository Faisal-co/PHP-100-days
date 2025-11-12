<!-- <h1>This is my first & my name is faisal</h1> -->
<?php
/*
echo 5 +4 ;
$x = true;
echo "<br>";
var_dump($x); // To check data Types
// Arrays
// index Arrays
echo "<br>";
$a  = array("faisal",55,33.4);
echo $a[0];
// Associative Arrays
echo "<br>";
$b = array("name"=>56,"address"=>"model town B");
var_dump($b); // To Show Array
echo "<br>";
echo "<br>";
// Basic Function
function first(){
    echo "I am software engineer";
}
first();
echo "<br>";
// with Parameter
function second($c){
    echo "I am $c";
}
second("web dev");
echo "<br>";
// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}
// For each Loop (like Simple for loop in Python)
$fruits = array("apricottttt","Apple", "Banana", "Mango");
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}
echo "<br>";
// For Loop With Keys Associative Array
$person = ["name" => "Faisal", "age" => 25];

foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}
echo "<br>";
// While Loop

$i = 1;
while ($i <= 5) {
    echo "Count: $i <br>";
    $i++;
}
echo "<br>";
// Do While Loop
$i = 6;
do {
    echo "Number: $i <br>";
    $i++;
} while ($i <= 5);
// Real life Situation for Loops 
// Nested for Loop
for ($i = 1; $i <= 3; $i++) {       // Outer loop
    for ($j = 1; $j <= 2; $j++) {   // Inner loop
        echo "i = $i, j = $j <br>";
    }
}*/

// Nested for each loop
/*$students = aray(
    array("Faisal", "Ali", "Sara"),
    array("Ahmed", "Kiran", "Usman")
);

foreach ($students as $group) {        // Outer foreach
    foreach ($group as $name) {        // Inner foreach
        echo "$name ";
    
    echo "<br>";                       // New line after each group
}*/
/*echo "Now String TopicS";
// Implode Casting
$fruits = ["apple", "banana", "mango"];
echo 
$str = implode(", ", $fruits);
echo $str;
dump_var($str);

$m = 33,"ass","we";
echo $m;
var_dump($m);*/
// Array Topic
/*echo "Array topic";
echo "<br>";
$a = array("apple", "banana", "mango");
var_dump($a);*/
// Simple Array ko write krne k 2 ways hn
/*$a = array("apple", "banana", "mango");
$b = ["ww",566,"greg"];*/
// Associative Array
/*echo "Associatve Array First way";
$d = ["AB" => "faisal","CD" => "Town B","EF" => 544.76];
print_r($d);
// Multidimensional & Associative(Key & Values) Array
echo "<br>";
echo "Asociative Array Second way";
$f = [];
$f["AB"] = ["faisal","role" => "Software Engineer"]; // can only give values also $f["AB"] = ["faisal", "ahmed"];
$f["CD"] = ["Town B"];
$f["EF"] = ["544.76"];
print_r($f);
echo "<br>";*/
// Spaceship Operator <=>
//echo 10 <=> 34;
// Array Documents Questions (https://www.php.net/manual/en/language.types.array.php)
// Q1:Array values can be other arrays, trees and multidimensional arrays are also possible?
// Array Documents Questions (https://www.php.net/manual/en/ref.array.php)
/*Example: Type Casting and Overwriting:
 IF multiple elements in the array declaration use the same key,
only the last one will be used as all others are overwritten.*/
/*  $array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
echo "<pre>";
var_dump($array);
echo "</pre>";        */
// Example: Mixed int and string keys
/* $array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -3  => 100,
);
echo "<pre>";
var_dump($array);
echo "</pre>";    */
//Example: key only for some elements and leave it out for others
/*$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
echo "<pre>";
var_dump($array);
echo "</pre>";    */
// Example: Casting Complex Example
/* $array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);
echo "<pre>";
var_dump($array);
echo "</pre>";   */
// Example:
/* $array = [];
$array[-5] = 1;
$array[] = 2;
echo "<pre>";
var_dump($array);
echo "</pre>";   */
// Example: Array Dereferencing
/* function getArray() {
    return [10, 20, 30];
}
// $arr = getArray(); Normally funtion calling k sath key se Access Nahi krte phehle calling ka object bnate hn.
echo getArray()[1];   //  Derefrencing men funtion calling k sath key se Access krte hn. */
//Example:
/* $arr = array(5 => 1, 12 => 2);
$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script
$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
unset($arr[5]); // This removes the element from the array
var_dump($arr);
unset($arr);    // This deletes the whole array & unset kren
var_dump($arr);   */
// Example:
// Now delete every item, but leave the array itself intact:
/*
// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);
// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);
// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array); */
// Example: Array Destructuring
 /*$source_array = ['faisal', 'rana', 'siraj'];

[$a, $b, $c] = $source_array;

echo $a, PHP_EOL;    // prints "foo"
echo $b, PHP_EOL;    // prints "bar"
echo $c, PHP_EOL;    // prints "baz" */
// Example:Array Destructuring in Foreach
/* $source_array = [[1, 'SFaisal'],[2, 'Siraj rana'],];

foreach ($source_array as [$val1, $val2]) {
    echo "{$val1}: '{$val2}'\n";
}   */
// <!------------------------------------- Array Functions  ------------------------------->
// Function: in_array() // Particular value exist or not
/*
$numbers = [10, 20, 30, 40];

if (in_array(20, $numbers)) {
    echo "Found!";
} else {
    echo "Not found!";
}
    */
// Another Example: in_array()
/*$y = [3,7,90,'acb'];
if(in_array('acbs',$y)){
    echo 'Found: acb';
}
else{
    echo 'Not Found: acb';
}
// Function: search()

// Function: count() Returns the number of elements in an array
/*
$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
$b[5] = 12;
var_dump(count($b)); //  Output is 4
var_dump($b);  
// Function: array_count_values(), give the Count of Each value

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
// Function: array_unique(), Eliminate Duplicates give unique values
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];
$result = array_unique($input);
// Funcrtion: array_keys(), Returns an array of all the keys in an array
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

// Function: array_values(), Returns an array of all the values in an array
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));
// Function: array_search(), Returns the first key For Given value
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
print_r($key);
$key = array_search('red', $array);   // $key = 1;
print_r($key);
// Function: array_splice(), Remove a portion of the array and replace it with something else
//(Argument1=Start index, Argument2=Number of values to delete but -ve means start from end, Argument3=Insert values)
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_dump($input);
// Function: array_unshift(), Add one or more elements to the beginning of an array
    $queue = [
    "orange",
    "banana"
];

array_unshift($queue, "apple", "raspberry");

var_dump($queue);
// Function: array_shift(), Remove element from the beginning of an array
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);
// Function: array_pop(), Remove element from the end of an array

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
// Function: array_push(), Add one or more elements to the end of an array
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
// Function: array_combine(), Returns an array whose keys are taken from array1 and whose values are taken from array2
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
// Function: array_merge(), Merge one or more arrays (end pe jor deta hai)
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
print_r($c); */
// Function: array_filter(), Filters the elements of an array using a callback function

/*
$a = [24,58,9,11,4,46124];
$b = array_filter($a,fn($n)=> $n % 2 == 0);  // Apply Condition on one Value.
var_dump($b);

// Function: array_map(), Mathematical Operation on All values, Apply the callback to the values in the given array
$arr = [56,3,9,'abc'=> 11,4];
$result = array_map(fn($n) => $n * 2, $arr); // Apply Operation on One Value.
var_dump($result);

// Function: array_reduce(), 

$array = [1,2,3,4,5,1];
$result = array_reduce($array,fn($pre,$curr)=> $pre + $curr); // Apply Operation on two Variable Values.
var_dump($result);


// Function: array_reduce(), Mathematical Operation on Particular values,Iteratively reduce the array to a single value using a callback function
/*$x = [['price'=> 4,'qty'=> 7],['price'=> 9,'qty'=>2]]; 
$y = array_reduce($x, fn($previous_val,$current_val)=> $previous_val + $current_val['price']*$current_val['qty']);
var_dump($y); */


// Function : is_array() 
// Finds whether a variable is an Array, Returns true or false
/* $a = array('this', 'is', 'an array');

echo is_array($a) ? 'is the Array' : 'not an Array';
echo "\n"; */
// Function: unset() just delete value, do not retrun anything and cannot be assigned to variable.
/* $array = ["faisal","a"=>"software","c"];
unset($array[1]);
print_r($array);
unset($array);
var_dump($array);// NULL, But error: undefined variable where NULL is stored */
// Function: explode(), Returns an array of strings
/*
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[4], PHP_EOL; // piece1
echo $pieces[5], PHP_EOL; // piece2  // Output piece5 piece6 but not give array */
// Function implode(), Returns String join all values by instead of array brakets.
/* $array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // Output "lastname,email,phone" */
// <-------------------------------- Loops on Arrays ------------------------------------->
/*$vals = ["gray","red", "green", "blue"];

foreach ($vals as $c) {
    echo $c . "<br>";
}
    
 $names = ['faisal','shahid','arslan'];
foreach($names as $nam){
    echo $nam . '<br>';
}
    
// for loop for Associative array

$names = [
    "name" => "Faisal",
    "role" => "Developer",
    "city" => "Lahore"
];

foreach ($names as $key => $value) {
    echo "$key : $value <br>";
}

// Function: max()
$nums = ['abc'=>10,'cde'=> 55,'fds'=> 32, 'ds'=>89,'fds'=> 45,'er'=>9];
echo max($nums);
echo '<br>';*/

// <-------------------------- Multidimensional Arrays ---------------------------->
// Way1:
/*echo 'First Way';
echo '<br>';
$way1 = [
    "Class 1" => [
        'class A' => ["name" => "Ali", "marks" => 85],
        ["name" => "Sara", "marks" => 90]
    ],
    "Class 2" => [
        'class B' => ["name" => "Usman", "marks" => 88],
        ["name" => "Fatima", "marks" => 95]
    ]
];
var_dump($way1);
// Way2:
echo '<br>';
echo 'Second Way';
echo '<br>';
$a = [];
$a['Class 1'] = []; // OR Can Direct Write like this, [[]]
$a['Class 1']['class A'] = [];
$a['Class 1']['class A']['name'] = 'Ali'; // OR Can Direct Write like this, $a['Class 1']['name'] = [['Ali']];
$a['Class 1']['class A']['marks'] = 85;
$a['Class 1'][] = [];
$a['Class 1'][0]['name'] = 'Sara';
$a['Class 1'][0]['marks'] = 90;
$a['Class 2'] = [];
$a['Class 2']['class B'] = [];
$a['Class 2']['class B']['name'] = 'Usman';
$a['Class 2']['class B']['marks'] = 88;
$a['Class 2'][] = [];
$a['Class 2'][0]['name'] = 'Fatima';
$a['Class 2'][0]['marks'] = 95;
var_dump($a);
echo '<br>';
echo 'Created from Above <br>';
echo '<br>';
$a = ['Class 1'=> ['class A'=>['name'=>'Ali','marks'=>85],['name'=>'Sara','marks'=>90]],
    'Class 2'=>['class B'=>['name'=>'Usman','marks'=>88],['name'=>'Fatima','marks'=>95]]
];
var_dump($a);
echo '<br>';
echo 'now diiferent keys <br>';
$m = [NULL=>'faisal'];
var_dump($m);
$m = [''=>'faisal'];
var_dump($m);
$m = ['faisal'];
var_dump($m);*/



/*
// First way
$data = ['person'=>['name'=>'Arsalan','age'=>25,'employee no'=>12],
        'address'=>['city'=>'bwp','email'=>'mno@gmail.com']];
// Second way
$data = []; // Declare kr Sakte hn empty OR kuch Value put kr k bhi. 
$data['person'] = [];
$data['person']['name'] = 'Arsalan';
$data['person']['age'] = 25;
$data['person']['employee no'] = 12;
$data['address'] = [];
$data['address']['city'] = 'bwp';
$data['address']['email'] = 'mno@gmail.com';
var_dump($data);
*/
// Class Question
/*
$search = 'backend';
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

// Class Question having more than one field record Label Head
/*
$search = "Seo";
$users = [
    [["name" => "mudasir", "age" => 21, "role" => "frontend"],
    ["name" => "mubashir RR", "age" => 26, "role" => "backend"],
    ["name" => "kashif Bahi", "age" => 32, "role" => "seo"]
    ],
    [["name" => "mudasir", "age" => 21, "role" => "frontend"],
    ["name" => "mubashir RR", "age" => 26, "role" => "backend"],
    ["name" => "faisal", "age" => 40, "role" => "software"]
    ]
];
$result = array_filter($users, function($user) use ($search) {

    return $user[0]['name'] === $search || $user['role'][0] === $search || $user['age'][0] === $search;
    return $user[1]['name'] === $search || $user['role'][1] === $search || $user['age'][1] === $search;
});

echo "<pre>";
print_r($result);
echo "</pre>";
*/
// Magic Constants
//echo __DIR__;
//echo __line__;
// __METHOD__
/*
class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();

echo "<br>";
$array = [20,30,40];
unset($array);   
var_dump($array);
echo "<br>";
// Functions
// Simple Function
function power($a, $b){

    return $a ** $b; // result ko return kr den
}
$z = power(5,3);
echo $z;
echo "<br>";
// Function into a Variable
$r = function ($a, $b){
    return $a ** $b;
};
echo $r(100,2);
// Function: is_numeric
$amount_spent = "1000";
if (is_numeric($amount_spent) && $amount_spent < 1000) {
    echo "Valid number and less than 1000";
}
// Function: is_int, is_float (Two Conditions in One if Statement)
if ((is_int($amount_spent) || is_float($amount_spent)) && $amount_spent < 1000) {
    echo "Strict type: number is less than 1000";
}

// <--------------------------------------- Conditional Statements ---------------------------------->
// Example: if-elseif(Two Conditions in One if Statement)
$age = 25;
$country = "Pakistan";

if ($age > 18 && $country == "Pakistan") {
    echo "You are an adult in Pakistan.";
}

//Example: if-else-if 
    $age = 20;
if ($age < 13) {
    echo "Child";
} elseif ($age < 20) {
    echo "Teen";
} else {
    echo "Adult";
}
// Switch 
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Friday":
        echo "Weekend is near";
        break;
    default:
        echo "Normal day";
}
*/

// Example:
/*
$amount_spent = "10000";
if($amount_spent < 1000){
    echo 'To get Membership at least spend 1000 <br>';
}
elseif($amount_spent < 5000){
    echo 'you are on Level 1 <br>';
}elseif($amount_spent < 10000){
    echo 'you are on Level 2 <br>';
}
else{
    echo 'you are on Top Level <br>';
}
// Example:
$a = 4;
$b = 'abc';
switch($b){
    case 3: echo '10 is not present';break;
    case 10: echo ' 10 is present';break;
    case "abc": echo 'abc is present';break;
    default: echo 'Nothing is found';
}
echo "<br>";
*/
// Example: Both Switch and If-Elseif // case men variable define kr sakte hn & value bhi assign kr sakte hn
$roomType = "deluxe";
$breakfast = true;
$seaView = false;
switch ($roomType) {
    case "standard": $price = 3000; break; // kia case men Mathematical operation laga sakte hn ya condition de sakte hn kisi tarhan.
    case "deluxe": $price = 5000; break;
    case "suite": $price = 8000; break;
    default: $price = 0;
}
if ($breakfast) $price += 500;
if ($seaView) $price += 1000;
echo "Total Room Price: Rs $price";


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
*/
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
// Example if elseif: 
    $age = ;
    $income = ;
    if($age < 18){
        echo 'age is not eligible';
    }
    elseif($income < 1000){
        echo 'income is not eligible';
    }
    else{
        echo 'eligible';
    }

// <--------------------------------------- Multi-Dimensional Arrays Problems---------------------------------->
// Problem 1: Prime numbers
$a = [24, 58, 9, 11, 4, 46124, 3];
$b = array_filter($a, function($n) {
    if ($n < 2) return false;               // 0 and 1 are not prime
    for ($i = 2; $i <= sqrt($n); $i++) {    // check divisibility up to √n
        if ($n % $i == 0) return false;     // if divisible → not prime
    }
    return true;                            // prime number
});
var_dump($b);

// Get all names from a multidimensional array
// Agar inner arrays ki tmam Same keys Same Position index level pe hai tu
$users = [
    ['id'=>1,'name'=>'Ali','age'=>22],
    ['id'=>2,'name'=>'Sara','age'=>25],
    ['id'=>3,'name'=>'John','age'=>19],
];
$names = array_column($users, 'name');
print_r($names);
// Condition ki base per sort krna

// for lop for Multidimensional array
// Count how many students have < 75% attendance across classes.
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
// Example: Simple Loop on Simple Multidimensional array

/* function search($s){
    $emp = [['name'=>'asif','age'=>33,'email'=>'asif@g.com'],
            ['name'=>'amir','age'=>48,'email'=>'abcamir@g.com'],
            ['name'=>'saud','age'=>26,'email'=>'saud@g.com']];
    foreach ($emp as $e){
        if ($e['name'] === $s || $e['email'] === $s || $e['age'] === $s){// // for if block only give particular true value or true Array
            $res = $e; // for if block only give particular true value or particular true inner Array.
        }    
    }
    return $res;
}
$result = search(26);
print_r($result);
*/
// Having keys inner arrays in Multidimensional Array
/* function search($s){
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
$result = search('for saud');
print_r($result);
*/
// For Multi Type information
/*
But $emp has two arrays inside (Personal_info and Work_info),each of which contains multiple subarrays (people).
So $e is itself a subarray of arrays, not a single person array.You need another inner loop to access the actual employee records.
*$e + ['category' => $category]
The + operator between arrays in PHP means array union — not addition.
It merges arrays by key, and importantly:If both arrays have the same key,the left-hand side ($e) wins — right-hand side won’t overwrite it.
*/
/*
function search($s){
    $emp = ['Personal_info' => [['name'=>'asif','age'=>33,'email'=>'asif@g.com'],
                                ['name'=>'amir','age'=>48,'email'=>'abcamir@g.com'],
                                ['name'=>'saud','age'=>26,'email'=>'saud@g.com']],
            'Work_info' => [['name'=> 'asif', 'role' => 'software'],
                            ['name'=> 'amir', 'role' => 'web'],
                            ['name'=> 'saud', 'role'=> 'designer']]
            ];
    foreach($emp as $category => $values){
        foreach ($values as $e){
            if ($e['name'] === $s || $e['email'] === $s || $e['age'] === $s || $e['role'] === $s || $category === $s){// // for if block only give particular true value
                $res = $e; // for if block only give particular true value or particular true Array.
                $Cat_results[] = $e + ['category' => $category];
            }    
        }}
    return $res;
    return $Cat_results;
}
$result = search('Personel_info');
print_r($result);
*/


?>



