<?php

/*
-----------
        * |
      * * |
    * * * |
  * * * * |
* * * * * |
-----------
*/

$max = 5;

for ($i = 1; $i <= $max; $i++) {
    // indentation
    for ($k = $max; $k >= $i + 1; $k--) {
        echo "  ";
    }

    // print pattern
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    
    echo PHP_EOL;
}