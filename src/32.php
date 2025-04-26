<?php
// Problem 1: Calculate the sum of two numbers
function calculateSum($a, $b) {
    return $a + $b;
}

$sum = calculateSum(5, 3);
echo "The sum of 5 and 3 is: " . $sum;

// Problem 2: Print a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

$randomNum = getRandomNumber();
echo "A random number between 1 and 10 is: " . $randomNum;
?>
