<?php

// Example 1: 
function subtract($a) {
  foreach($a as $num){
    if($num % 2 !==0){
      echo "odd number $num <br>";
      return "odd number $num <br>"; // difference echo and return
    }
  }
}
$x = subtract([1,3,5,6,66,8,9,11,13,44]);
echo $x;
// Example 2:

function grade($marks) {
    if ($marks >= 80) {
        return "Grade: A";
    } elseif ($marks >= 60) {
        return "Grade: B";
    } elseif ($marks >= 40) {
        return "Grade: C";
    } else {
        return "Fail";
    }
}
echo grade(85); 
echo "<br>";
echo grade(55);  




?>
