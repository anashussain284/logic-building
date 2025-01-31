<?php 

/**
 * Largest Number in an Array
 */
$arr = [21, 1, 2, 3, 4, 5, 6, 11];
$count = count($arr);
$sizeOf = sizeof($arr);
$max = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
}

echo "Max: {$max}\n";