<?php
// Problem: Create a function that takes an array of integers as input and returns the sum of all even numbers in the array.
function sum_even_numbers($numbers) {
    $evenSum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $evenSum += $number;
        }
    }
    return $evenSum;
}

// Example usage
$testArray = [1, 2, 3, 4, 5, 6];
echo "The sum of even numbers in the array is: " . sum_even_numbers($testArray);
