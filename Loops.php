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



?>