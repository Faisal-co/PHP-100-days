<?php
/*
/*inside all Loops each iteration Variable ki Value ko original pe reset krta deta hai(No effect i++,i--)*/
// Example: Star Pattern with foreach loop.
/* $a = range(1,5);
$i = 1;
foreach($a as $r){ // Number of rows print krta hai 
    $b = range(1,$i);
    foreach($b as $n){ // Number of columns print krta hai
    echo "*";
    }
    $i++;
    echo "<br>";
} */

// Example: Star Pattern with While loop 
/*$m = 1;
while($m <=5){ // This loop Row Prints
$n = 1; 
$k = 1;
    while($n >= $k && $n <= $m){ // This loop Column Prints1
        echo "*";
        $k++;
        $n++;
    }
echo "<br>";
$m++;
}
*/
// Example: Nested if-elseif, Customer Loyalty & Discount System
/*
A store gives:
Gold members → 20% discount
Silver members → 10% discount
Normal users → 0% discount
But if total > 5000, Gold gets +5%, Silver gets +2%.*/
/* $customer = 2999;
$total = 6000;
if($customer > 3000){
    echo 'This is Gold customer, 20% discount <br>';
    if($total > 5000){
        echo 'Now gold customer get 5% more and discount becomes 25% <br>';
    }  
}
if($customer <= 3000 && $customer > 1000){
    echo 'This is Silver customer, 10% discount <br>';
    if($total > 5000){
        echo 'Now Silver customer get 2% more and discount becomes 12% <br>';

    }
}
elseif ($customer <= 1000){
    echo 'This is normal customer 0% discount <br>';
}
    */
/* Example: Nested if-elseif,Warehouse Dispatch Decision
If region = “North”:
if stock ≥ 100 → dispatch now
Else region = “South”:
if stock ≥ 200 → dispatch
Else delay dispatch. */
/*$stock_details = ['region_1'=>'north','stock_1'=>10,'region_2'=>'south','stock_2'=>20];
$dispatch = false; // Using flag kisi event ya variable ko track krne k liye   
if($stock_details['region_1']=='north'){
    if($stock_details['stock_1'] >= 100){
        echo 'Dispatch Now for North region <br>';
        $dispatch = true;
    }
}
if($stock_details['region_2']=='south'){
    if($stock_details['stock_2'] >= 200){
       echo 'Dispatch for South region <br>';
       $dispatch = true;
    }
    }
if(!$dispatch){/* if ya elseif block tub hi chale jb aik Variable flag,
  upper true hota hua aa raha ho end per flase ho kr chal jaye. 
    echo 'Delay Dispatch';
}*/
// Example: Nested if-elseif, Hotel room Booking Type.
// Multiple Variables bnane ki bajaye aik Array bna len.
// Aik Variable per aik se ziyada Condition lagti hn tu Nested if laga den.
$Booking_Type = ['room_type'=>'Delux','weekend'=>'yes'];
if($Booking_Type['room_type'] == 'Delux'){
    if($Booking_Type['weekend'] == 'yes'){
        echo 'delux_rate_increase is 10% <br>';
    }
    else{
        echo 'Normal rates for Delux <br>';
    }
}
elseif($Booking_Type['room_type'] == 'Super_Delux'){
    if($Booking_Type['weekend'] == 'yes'){
        echo 'Super_Delux_rate_increase is 20%';
        
    }
else{
    echo 'Super_rate_increase is 5% <br>';
}
}*/
// Class Example 
echo "Alpha";
echo "brown";

$a = ['a'=>1
    ,'b'=>2];
$b = ['a'=>1];
if($a['a'] == $b['a'] && !$a['b'] || !$b['b']){
    echo 'Equal';

}
else{
    'Not Equal';
}














?>

