<?php 

/*
-----------
* * * * * |
* * * *   |
* * *     |
* *       |
*         |
-----------
*/

$max = 5;

for ($i = 1; $i <= $max; $i++) {
    
    for ($j = $max; $j >= $i ; $j--) {
        echo "* ";
    }
    
    echo PHP_EOL;
}


// for ($i = $max; $i > 0; $i--) {
//     for ($j = 0; $j < $i; $j++) {
//         echo "* ";
//     }
//     echo PHP_EOL;
// }