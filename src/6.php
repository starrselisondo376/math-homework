
<?php

function getRandomMathHomeworkProblem() {
    // Generate a random number between 1 and 10
    $num1 = rand(1, 10);
    // Generate a random operator (+, -, x, /)
    $operator = rand(1, 4);
    // Generate a second random number
    $num2 = rand(1, 10);

    if ($operator === 1) {
        return "$num1 + $num2";
    } elseif ($operator === 2) {
        return "$num1 - $num2";
    } elseif ($operator === 3) {
        return "$num1 x $num2";
    } else {
        return "($num1 / $num2)";
    }
}

function getRandomMathHomeworkSolution() {
    // Generate a random number between 1 and 10
    $num1 = rand(1, 10);
    // Generate a random operator (+, -, x, /)
    $operator = rand(1, 4);
    // Generate a second random number
    $num2 = rand(1, 10);

    if ($operator === 1) {
        return "$num1 + $num2 = " . ($num1 + $num2);
    } elseif ($operator === 2) {
        return "$num1 - $num2 = " . ($num1 - $num2);
    } elseif ($operator === 3) {
        return "$num1 x $num2 = " . ($num1 * $num2);
    } else {
        return "($num1 / $num2) = " . ($num1 / $num2);
    }
}

?>