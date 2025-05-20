<?php
// This is a PHP script to demonstrate an array manipulation function.

// Define an array of some numbers
numbers = [10, 20, 30, 40, 50];

// Accessing elements from the array using their position
$firstElement = $numbers[0];
$secondElement = $numbers[1];
$thirdElement = $numbers[2];

// Adding an element to the end of the array
numbers[] = 60;

// Creating a new array with different elements
$newNumbers = [5, 7, 9, 8, 10, 12, 14, 15];

// Accessing elements from the new array using their position
$firstElementNew = $newNumbers[0];
$secondElementNew = $newNumbers[1];

// Sorting the array in ascending order
usort($numbers, function($a, $b) {
    return $a - $b;
});

// Adding an element to the end of the sorted array
$numbers[] = 25;

// Outputting the modified array
echo "Modified array: " . implode(", ", $numbers);

// Sorting the new array in descending order and printing it
usort($newNumbers, function($a, $b) {
    return $b - $a;
});

print_r($newNumbers);
?>
