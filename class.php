<?php
// Switch

$order_status = 'hold';
switch($order_status){
    case 'processing': echo 'Order will be Placed in 2 days';break;
    case'hold': echo 'order is on hold';break;
    case'cancelled': echo 'order is cancelled';break;
    case'delievered': echo 'order is deleivered';break;
    default: echo 'invalid order';

}
// if-elseif

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

// While Loop 
// Example:
$balance = 100;
while ($balance > 0) {
    echo "Remaining balance: $balance <br>";
    $balance -= 20;
}
// Example:
$fruits = ["Apple", "Banana", "Cherry"];
$i = 0;

while ($i < count($fruits)) {
    echo $fruits[$i] . "<br>";
    $i++;
}
// foreach Loop
// Example Type 1:Simple Loop on Simple Multidimensional array(agar keys bhi search se match krni hon tu $emp as $keys => $e)  )

function search($s){
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
$result = search(26);
print_r($result);

// Example Type 2:Having keys inner arrays in Multidimensional Array
function search($s){
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

?>