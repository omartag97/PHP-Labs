<?php
// Task 1
session_start();
$page = "ITI";
$page = $_SESSION['page'];
echo $page . '<br>';

// OR

define('WEBSITE', 'Website');
echo WEBSITE . '<br>';


// ------------------------------------------------------------------------------

// task 2
print_r($_SERVER['SERVER_NAME'] . '<br>');
print_r($_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'] . '<br>');
print_r($_SERVER['SERVER_PORT'] . '<br>');
print_r($_SERVER['REQUEST_URI'] . '<br>');

// ------------------------------------------------------------------------------

// Task 3

// For
$a = 0;
$b = 0;

for ($i = 0; $i < 5; $i++) {
    $a += 10;
    $b += 5;
}


print("The value of a = " . $a . " and b =  " . $b . '<br>');

// while

$i = 0;
$num = 50;

while ($i < 10) {
    $num--;
    $i++;
}

print('Loop stopped at i = ' . $i . " and num =  " . $num  .'<br>');

// do .. while
$i = 0;
$num = 0;

do {
    $i++;
} while ($i < 10);
print('Loop stopped at i = ' . $i . '<br>');

// Foreach 
$arr = array(1, 2, 3, 4, 5);
print('The Value of each loop is :' . '<br>');
foreach ($arr as $value) {
    echo "Value is $value <br />";
}

// Output -> 
//Value is 1
// Value is 2
// Value is 3
// Value is 4
// Value is 5

// -------------------------------------------------------------------------------

// Switch Case Task
echo '<br>';
$age = 10;

switch ($age) {
    case $age < 5:
        echo 'Stay at home';
        break;

    case $age = 5:
        echo 'Go to kindergarden';
        break;

    case ($age > 6 || $age < 12):
        echo 'Go to grade : xxx';
        break;
}
