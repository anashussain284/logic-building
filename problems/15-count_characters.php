<?php 

/**
 * Count characters in a string
 */

$string = readline('Enter a string: ');
$count = 0;

for ($i = 0; isset($string[$i]); $i++) {
    // echo $string[$i];
    $count++;
}

echo $count . PHP_EOL;