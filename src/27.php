<?php
// Example PHP code to demonstrate various mathematical concepts and functions.
$first_number = 5;
$second_number = 3;

echo "The sum of $first_number and $second_number is: " . ($first_number + $second_number) . "\n";
echo "The difference between $first_number and $second_number is: " . (($first_number - $second_number)) . "\n";

// Example PHP code with an error
$invalid_input = 5.5;
if ($invalid_input != 10) {
    echo "Error! The condition should be '10'.\n";
}

// Check if two numbers are equal
echo "Are the numbers $first_number and $second_number equal? " . ($first_number == $second_number) ? "Yes" : "No";

// Example PHP code with a basic arithmetic operation
$result = $first_number + $second_number;
echo "The sum of $first_number and $second_number is: " . $result . "\n";
