<?php
// Define constants
define('MAX', 10);
define('MIN', -5);

// Generate a random integer within the range of MAX and MIN
$randomInt = mt_rand(MAX, MIN + 1);

// Check if the generated random number is greater than or equal to 0
if ($randomInt >= 0) {
    echo "The generated random number is at least zero.";
} else {
    // Generate a new random integer within the range of MAX and MIN after decrementing by 50
    $newRandomInt = mt_rand(MAX, MIN - 50);
    if ($newRandomInt < 0) {
        echo "The generated random number is below zero.";
    } else {
        echo "The generated random number is less than zero.";
    }
}
?>
