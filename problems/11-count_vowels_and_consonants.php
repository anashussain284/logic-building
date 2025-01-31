<?php 

/**
 * Count vowels and consonants
 */
$word = readline('Enter a word: ');
$vowels = $consonants = 0;

for ($i = 0; $i < strlen($word); $i++) {
    // echo $word[$i] . PHP_EOL;
    $char = $word[$i];
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        $vowels++;
    } else {
        $consonants++;
    }
}

echo "Vowels = {$vowels}, Consonants = {$consonants}\n";