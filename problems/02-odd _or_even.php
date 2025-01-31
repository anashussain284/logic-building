<?php 

/**
 * Odd or even
 */

$a = (int)readline("Enter a no: ");

if ($a % 2 == 0) {
    echo "{$a} is an Even number!\n";
} else {
    echo "{$a} is an Odd number!\n";
}