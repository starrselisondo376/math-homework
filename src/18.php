<?php
function randomMathHomework() {
    $homework1 = "What is the result of 5 + 3?";
    $homework2 = "Find the sum of 7 and 4.";
    $homework3 = "Calculate the difference between 8 and 2.";
    $homework4 = "Solve for x in 2x - 6 = 10.";

    return randomHomework();
}

function randomHomework() {
    // Example: Generate a simple addition problem
    $randomNum1 = rand(1, 10);
    $randomNum2 = rand(1, 10);
    $homeworkSolution = "The sum of {$randomNum1} and {$randomNum2} is {$randomNum1 + $randomNum2}.";
    return $homeworkSolution;
}
?>
