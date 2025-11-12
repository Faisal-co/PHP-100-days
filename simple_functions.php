<?php
function subtract($a) {
  foreach($a as $num){
    if($num % 2 !==0){
      echo "odd number $num <br>";
      return "odd number $num <br>"; // Yahan return 1 kion de raha hai.
    }
  }
}
$x = subtract([1,3,5,6,66,8,9,11,13,44]);
echo $x;
// Example 2:

function checkGrade($marks) {
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
echo checkGrade(85);  // Output: Grade: A
echo "<br>";
echo checkGrade(55);  // Output: Grade: C



?>