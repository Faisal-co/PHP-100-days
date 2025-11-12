<?php
// Example Type 1:Simple Loop on Simple Multidimensional array(agar keys bhi search se match krni hon tu $emp as $keys => $e)  )

/* function search($s){
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
*/
// Example Type 2:Having keys inner arrays in Multidimensional Array
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
// Example Type 3: Two Different Type of Informations Blocks(Loop with Multi-Dimensional Array)
function search($s) {
    $emp = [
        'Personal_info' => [
            ['name' => 'asif', 'age' => 33, 'email' => 'asif@g.com'],
            ['name' => 'amir', 'age' => 48, 'email' => 'abcamir@g.com'],
            ['name' => 'saud', 'age' => 26, 'email' => 'saud@g.com']],
        'Work_info' => [
            ['name' => 'asif', 'role' => 'software'],
            ['name' => 'amir', 'role' => 'web'],
            ['name' => 'saud', 'role' => 'designer']]
    ];
    $results = []; // 
    // CASE 1: If user searches by Category name
    if (isset($emp[$s])) {
        return $emp[$s]; // Return that entire category
    }
    // CASE 2: Search by name(Common in both/ Not Dependent on Category),
    //  Case 3: Search by email, age, or role (Not Common in both / Dependent on Category)
    foreach ($emp as $category => $values) {
        foreach ($values as $e) {
            // If value matches anywhere in record
            if (in_array($s, $e, true)) {
                // jo Category match kr jayen if Condition men just usko Print krna hai. 
            $results[] = $e 
            // Optional Step
            $results[] = $e + ['category' => $category]; //ye just key value ha['category' => $category].
            }// yahan pr + ka meaning just append krna hai last men. 
//yahan per ['category' => $category]Brakets means new array add krna nahi,just key value add krna hai.
        }
    }
    // If nothing found
    return !empty($results) ? $results : 'No match found.'; 
}
// --- Possible Searches ---
 // Fetch entire category
/*$search = 'Personal_info';
$info = search($search);
if($search == 'Work_info'){
    echo 'Work information of employees:  <br>';
    print_r($info);
}
elseif($search == 'Personal_info'){
    echo 'Personel information of employees:  <br>';
    print_r($info);

}
else{
    echo 'No match found <br>';
}
echo "<br>"; */
 //print_r(search('asif'));          // Find asif’s details from both categories
echo "<br>";
print_r(search('designer'));      // Find based on role
echo "<br>";
//print_r(search(26));              // Find based on age
echo "<br>";




?>