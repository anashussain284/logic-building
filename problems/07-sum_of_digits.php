<?php 

/**
 * Sum of digits
 */

$num = (int)readline("Enter no: ");

$sum = 0;

while ($num > 0) {
    $v = $num % 10;
    $sum += $v;
    $num = $num / 10;
}

echo $sum;
echo PHP_EOL;
