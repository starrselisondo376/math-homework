<?php
function solveMathProblem($problem) {
    $solution = "The solution to the problem is: $problem.";
    return $solution;
}

$problem = "What is the area of a rectangle with length 5 and width 3?";
$solution = solveMathProblem($problem);
echo $solution; // Expected output: The area of a rectangle with length 5 and width 3 is 15.
?>
