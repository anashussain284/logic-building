<?php 

/**
 * Multiplication table
 */
$num = readline('Enter number: ');

for ($i = 1; $i <= 10; $i++) {
    $res = $num * $i;
    echo "{$num} x {$i} = {$res}\n";
}