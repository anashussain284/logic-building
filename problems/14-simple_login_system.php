<?php 

/**
 * Simple Login System
 */

$user = 'anas';
$pass = '123';
$userName = readline('Enter user name: ');
$password = readline('Enter password: ');

if ($userName == $user && $pass == $password) {
    echo "Login success...\n";
} else {
    echo "In-valid credentials...\n";
}
