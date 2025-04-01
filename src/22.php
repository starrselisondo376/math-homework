<?php
// Problem 1: Find the maximum value of an array using PHP's max() function.
$a = [3, 7, 2, 5];
$max_value = max($a);
echo "The maximum value is: $max_value";

// Problem 2: Print a message indicating that a given number is even.
$num = 8;
$even_message = ($num % 2 === 0) ? "Yes" : "No";
echo "$even_message is an even number";

// Problem 3: Calculate the factorial of a given number using recursion.
$n = 5;
$factorial = $n <= 1 ? 1 : $n * $factorial($n - 1);
echo "The factorial of $n is $factorial";

// Problem 4: Implement a function that takes an array and returns the sum of its elements.
$array = [3, 5, 7, 2];
$sum_of_elements = array_sum($array);
echo "The sum of all elements in the array is: $sum_of_elements";
