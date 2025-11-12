<?php
// Call Back Functions
function a($x){
    return $x;
}
function b($y,$N,$m){
	$v = $y("Now returning V value from function b <br>");
    //echo $v;
    //return $v;
    return [$N, $m];
}
list($u, $c) = b("a","N Value", "m val");
echo "Now somethings are coming in variable u and c => " .$u. " & " .$c;
// Closure Functions
// Nested Functions
// Example: Calculate Marks and Grade
function studentReport($marks) {
    function calculateGrade($marks) {
        if ($marks >= 80) return "A+";
        elseif ($marks >= 60) return "B";
        elseif ($marks >= 40) return "C";
        else return "Fail";
    }
    $grade = calculateGrade($marks);
    echo "Marks: $marks | Grade: $grade<br>";
}
studentReport(85); 
studentReport(55);

// Anonymous Functions
// Arrow Functions
// Variable Functions
// Higher Order Functions(Call back Functions)
// Lambda Functions
// Callable Functions

/* function greet($name) {
    echo "Hello, $name!<br>"; // from here the functions the second function will be Called
}
function callUser($callback) {
    // Call the function passed in
    $callback("Faisal");
}
// Pass 'greet' as callback (no parentheses!)
callUser('greet'); */
// Simple function:
function subtract($a) {
  foreach($a as $num){
    if($num % 2 !==0){
      return "odd number $num <br>";// Yahan return 1 kion de raha hai.
    }
  }
}
$v = subtract([1,3,5,6,66,8,9,11,13,44]);
echo $v;


/* // Static Functions
// Recursive Functions
// Generator Functions
// Iterable Functions
// Magic Constants
// echo __DIR__;
// echo __line__;
// __METHOD__
/*
class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
  */

?>