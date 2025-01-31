<?php 

/**
 * Reverse a string
 */
$str = readline('Enter a string: ');
$rev = '';

for ($i = strlen($str)-1; $i >= 0; $i--){
    $rev .= $str[$i];
}

echo $rev . PHP_EOL;