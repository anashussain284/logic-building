<?php 

/*
-----------
* * * * * |
  * * * * |
    * * * |
      * * |
        * |
-----------
*/

$max = 5;

for ($i = 0; $i < $max; $i++) {

    // indention
    for ($k = $max; $k > ($max - $i); $k--) {
        echo "  ";
    }

    // sign
    for ($j = 0; $j < ($max - $i); $j++) {
        echo "* ";
    }

    echo PHP_EOL;
}