<?php 

/*
-----------
    *     |
   * *    |
  * * *   |
 * * * *  |
* * * * * |
 * * * *  |
  * * *   |
   * *    |
    *     |
-----------
*/
// $max = 5;
$max = readline('Enter a no: ');

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

for ($i = 1; $i < $max; $i++) {
  // space
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }

  // sign
  for ($k = 0; $k < $max - $i; $k++) {
    echo "* ";
  }

  echo PHP_EOL;
}