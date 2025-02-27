<?php 

$max = 5;

/**
 * Simple implementation of Left side traingle
 */
for ($i = 0; $i < $max; $i++) {
    for ($j=0; $j <= $i; $j++) { 
        echo "* ";
    }
    echo PHP_EOL;
}

/**
 * Right side triangle
 */
// for ($i = 1; $i <= $max; $i++) {
//     // echo "* ";
//     for ($j = 1; $j <= $max; $j++) {
//         // echo "9";
//         if ($j <= ($max - $i)) {
//             echo "  ";
//         } else {
//             echo " *";
//         }
//     }
//     echo PHP_EOL;
// }

/**
 * Left side triangle
 */
// for ($i = 1; $i <= $max; $i++) {
//     for ($j = 1; $j <= $max; $j++) {
//         if ($j <= $i) {
//             echo "* ";
//         } else {
//             echo " ";
//         }
//     }
//     echo PHP_EOL;
// }