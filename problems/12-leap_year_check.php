<?php 

/**
 * Leap year check
 */

 $year = readline('Enter a year: ');

 if (($year % 4 == 0 && $year %100 != 0) || $year % 400 == 0) {
     echo "{$year} - Leap year\n";
 } else {
     echo "{$year} - !Leap year\n";
 }