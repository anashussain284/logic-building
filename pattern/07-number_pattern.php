<?php 

/* 
-----------
    1     |
   2 2    |
  3 3 3   |
 4 4 4 4  |
5 5 5 5 5 |
-----------
*/

// $max = 5;
$max = readline('Enter a no: ');

for ($i = 1; $i <= $max; $i++) {
    // space
    for ($k = 0; $k < $max - $i; $k++) {
        echo " ";
    }

    // no.
    for ($j = $k; $k < $max; $k++) {
        echo "{$i} ";
    }

    echo PHP_EOL;
}