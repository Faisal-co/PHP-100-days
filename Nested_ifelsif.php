 <?php
 /*
Problem 1: Customer Loyalty & Discount System
A store gives:
Gold members → 20% discount
Silver members → 10% discount
Normal users → 0% discount
But if total > 5000, Gold gets +5%, Silver gets +2%.
 */ 
$customer = ['name' => 'Ali', 'membership' => 'Gold', 'total' => 6000];
if ($customer['membership'] == 'Gold') {
    $discount = 20;
    if ($customer['total'] > 5000) {
        $discount += 5; // Nested condition
    }
} elseif ($customer['membership'] == 'Silver') {
    $discount = 10;
    if ($customer['total'] > 5000) {
        $discount += 2;
    }
} else {
    $discount = 0;
}
$final_bill = $customer['total'] - ($customer['total'] * $discount / 100);
echo "{$customer['name']} gets $discount% off → Final Bill: $final_bill";
/* Problem 2: Warehouse Dispatch Decision
If region = “North”:
if stock ≥ 100 → dispatch now
Else region = “South”:
if stock ≥ 200 → dispatch
Else delay dispatch. */
$order = ['region' => 'South', 'stock' => 180];
if ($order['region'] == 'North') {
    if ($order['stock'] >= 100) echo "Dispatch Now";
    else echo "Delay (Low Stock)";
} elseif ($order['region'] == 'South') {
    if ($order['stock'] >= 200) echo "Dispatch Now";
    else echo "Delay (Needs Approval)";
} else {
    echo "Unknown Region";
}
/*Problem 3:Hotel Room Booking Type
If type = “Deluxe”:
If weekend → +20%
Else → normal rate
If type = “Suite”:
If weekend → +30%
Else → +10%.
*/
$booking = ['type' => 'Suite', 'isWeekend' => true];
$base = 3000;
if ($booking['type'] == 'Deluxe') {
    if ($booking['isWeekend']) $total = $base * 1.20;
    else $total = $base;
} elseif ($booking['type'] == 'Suite') {
    if ($booking['isWeekend']) $total = $base * 1.30;
    else $total = $base * 1.10;
}
echo "Room Total: Rs. $total";
/*Problem 4: Switch with Nested If: University Admission
Based on faculty and marks:
Engineering → if marks ≥ 80 = Selected
Medical → if marks ≥ 85 = Selected
Arts → if marks ≥ 60 = Selected
Otherwise Rejected.
*/
$applicant = ['faculty' => 'Medical', 'marks' => 83];
switch ($applicant['faculty']) {
    case 'Engineering':
        if ($applicant['marks'] >= 80) echo "Selected for Engineering";
        else echo "Rejected";
        break;
    case 'Medical':
        if ($applicant['marks'] >= 85) echo "Selected for Medical";
        else echo "Rejected";
        break;
    case 'Arts':
        if ($applicant['marks'] >= 60) echo "Selected for Arts";
        else echo "Rejected";
        break;
    default:
        echo "Invalid Faculty";
}
/* Problem 6:Nested Switch, User Role & Department Access System
You’re building an admin panel:
If role = “Admin” → full access.
If role = “Manager”:
Department = “Sales” → access to reports.
Department = “HR” → access to employee data.
If role = “Employee”:
Department = “IT” → access to support tickets.
Department = “Finance” → access to payment dashboard.
*/
//Rule for Nested Switch(agar kisi case ki mazeed categories banti hn,Condition feel ho per Numeric na ho).
$user = [
    'role' => 'Manager',
    'department' => 'HR'
];
switch ($user['role']) {
    case 'Admin':
        echo "Access: Full System Access";
        break;
    case 'Manager'://Case Manager role ki mazeed two categories hn(agar kisi case ki mazeed categories banti hn)
        switch ($user['department']) {
            case 'Sales':
                echo "Access: Sales Reports Section";
                break;
            case 'HR':
                echo "Access: Employee Management";
                break;
            default:
                echo "Access: General Manager Dashboard";
        }
        break;
    case 'Employee'://Case Employee role ki mazeed two categories hn(agar kisi case ki mazeed categories banti hn)
        switch ($user['department']) {
            case 'IT':
                echo "Access: Support Tickets";
                break;
            case 'Finance':
                echo "Access: Payment & Invoice Section";
                break;
            default:
                echo "Access: Limited Staff Dashboard";
        }
        break;
    default:
        echo "No Access Assigned";
}




 
 
 
 ?>