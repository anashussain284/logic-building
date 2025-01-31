<?php 

/**
 * Check no is palindrom or not
 */

$num = (int)readline("Enter no: ");
$OrginalNum = $num;
$rev = 0;
while ($num > 0) {
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;
    $num = (int)($num/10);
}

if ($OrginalNum == $rev) {
    echo "{$OrginalNum} is a palindrome.";
} else {
    echo "{$OrginalNum} is not a palindrome.";
}
echo PHP_EOL;