<?php 

/**
 * Factorial
 */

$num = (int)readline("Enter a no: ");
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
    // echo $i . PHP_EOL;
}
echo "Factorial: {$factorial}" . PHP_EOL;