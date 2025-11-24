<?php
// star print
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
// reverse loop
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
// Acumulate sum of numbers
$i = 1;
$sum = 0;
while ($i <= 10) {
    $sum += $i;
    $i++;
}
echo "Sum = $sum";
// While with Array 

$fruits = ["apple", "banana", "mango"];
$i = 0;
while ($i < count($fruits)) {
    echo $fruits[$i] . "<br>";
    $i++;
}
// Print each letter of string
$name = "Faisal Siraj";
for($a = 0; $a < strlen($name); $a++){
    echo $name[$a]."<br>";
}
// Find max and min values from an array (using loop only)
$arr = [12, 45, 3, 67, 23];
$max = $arr[0];
$min = $arr[0];
foreach ($arr as $num) {
    if ($num > $max) $max = $num;
    if ($num < $min) $min = $num;
}
echo "Max: $max<br>";
echo "Min: $min<br>";


?>