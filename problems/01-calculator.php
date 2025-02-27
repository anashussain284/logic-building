<?php 

/**
 * Simple calculator
 */

$a = (int)readline("a: ");
$b = (int)readline("b: ");

// // var_dump($no);
// // echo "\na = {$a}, b = {$b}";
echo "1: for Addition(+)\n";
echo "2: for Subtraction(-)\n";
echo "3: for Divition(/)\n";
echo "4: for Multiplication(*)\n";
$c = (int)readline("Enter your option: ");
echo "Answer is ";
switch ($c) {
    case 1: 
        echo $a + $b;
        break;
    case 2: 
        echo $a - $b;
        break;
    case 3:
        echo $a / $b;
        break;
    case 4:
        echo $a * $b;
        break;
    default:
        echo "in-valid";
}
echo PHP_EOL;