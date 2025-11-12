<?php
// Example 1: Create Array
/*
$v = [];
    $v[] = 2;
    $v['three'] = 3; // 
    $v = ['four' => 4]; // new array nahi aye ga, only key value likhne ka tarika ha.
    // $v = [];//Remove Old Values and keys, ye reset ha,empty value ha, array dobara empty ho gaya ha.New array 
    // add krne k liye array ki key dena zroori hai. Question: $v[] = []; if $v=[['a'=> 1,'b'=> 2]]; ???
    $v[0] = 5;
    $v['A'] = [];
    $v['A']['seven'] = 7;
    $v[]
    // $v = 8;// ye reset ha, Remove Old Values and keys
    // $v = 'abc'; // ye reset ha , Remove Old Values and keys */
// Example 2: Create an Array
/*$s = []; // Add new Array
$s[] = 2; // To Add any Value Or Array Braket $s[] is necessory for key identity.
$s['three'] = 3;
$s[] = 4; 
echo '<pre>';
var_dump($s);
echo '<pre>'; */
// for Numbers Create Array having only values from Loop 
/* 
$a = []; 
$i = 1;
while($i <= 6){
    $a[] = $i;
    $i++;
}
var_dump($a);
*/
// for String & Numbers Create an Array having keys and values from Loop 
/* $z = ['amir' => 'a','b','faisal' => 'c','d'];
$x = [];
foreach($z as $keys => $vals){
    $x[$keys] = $vals;
    // $x[$keys] = strtoupper($vals); // Apply any built-in function to values but how to keys??? 
}
echo '<pre>';
var_dump($x);
echo '<pre>'; */
// The string Way Create an Array having only String Values from Loop 
/*
$m = ['abc','cde','fgh'];
$n = [];
foreach($m as $val){
    $n[] = $val;
}
echo '<pre>';
var_dump($n);
echo '<pre>';
*/
// Now stop Loop after putting Some values
/* $m = [700,'ccdcg',543,'fgh'];
$n = [];
foreach($m as $val){
    $n[] = $val;
    if(Count($n) == 1){
    break; // break jitna bhi undar nested likhen outer loop/most outer block se bhi Bahar le jaye ga.
    }
}
echo '<pre>';
var_dump($n);
echo '<pre>';
echo '<br>';
echo 'nice'; */
// Note: Kis line per & Kis line se value ko lena ha.
// Note: Loop agar Nested nahi hai tu line by line loop k undar end line tk sara code chalaye ga.
// is Liye Break ko Condition k foran baad likhen taa k, Condition met hone per loop se bahir ajaen.
// Example: Array men kisi Particular Place index per new Key/Value ko Put krna.
$i = 1;
while($i <= 5){
$w = ['abc',123,'xyz'];
    $w[] = 'science';
    if(count($w) == 5){
        break;
    }
    $i++;
}
echo '<pre>';
var_dump($w);
echo '<pre>';
echo '<br>';





?>

















