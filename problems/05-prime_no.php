<?php 

/**
 * Prime number
 * The no is divisible only with that without reminder
 */

$a = (int)readline("Enter a no: ");
$isPrime = true;

for ($i = 2; $i < $a; $i++) {
    if ($a % $i == 0) {
        $isPrime = false;
        break;
    }
}

echo "\n";

if ($isPrime && $a > 1) {
    echo "{$a} is a prime number";
} else {
    echo "{$a} is not a prime number";
}

echo "\n";