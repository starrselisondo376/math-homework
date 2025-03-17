
<?php
// Math Homework Problems and Solutions

function getProblem() {
    // Generate a random math problem
    $problem = rand(1, 10) . ' + ' . rand(1, 10);
    return $problem;
}

function solveProblem($problem) {
    // Solve the given math problem
    $result = eval('return ' . $problem . ';');
    return $result;
}

// Get a random math problem and its solution
$problem = getProblem();
$solution = solveProblem($problem);

// Print the result
echo "The solution to the problem is: $solution";
?>