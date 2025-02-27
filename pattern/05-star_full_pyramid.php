<?php 

/*
-----------
    *     |
   * *    |
  * * *   |
 * * * *  |
* * * * * |
-----------
*/

// $max = 5;

// for ($i = 0; $i < $max; $i++) {

//     // indention
//     for ($k = $max; $k > $i + 1; $k--) {
//         echo " ";
//     }

//     // sign
//     for ($j = 0; $j <= $i; $j++) {
//         echo "* ";
//     }

//     echo PHP_EOL;
// }


// $max = 5;
$max = (int)readline('Enter a no: ');

for ($i = 0; $i < $max; $i++) {
  // space
  for ($k = 1; $k < $max - $i; $k++) {
    echo " ";
  }

  // sign
  for ($j = $k; $j <= $max; $j++) {
    echo "* ";
  }

  echo PHP_EOL;
}