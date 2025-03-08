<?php
$result = 'No results found';

// Get the number of math homework problems and solutions
$problems = 10;
$solutions = 5;

// Generate a random number between 1 and $problems
$rand_prob = rand(1, $problems);

// Generate a random number between 1 and $solutions
$rand_soln = rand(1, $solutions);

// Get the math homework problem and solution for the given numbers
$math_homework_problem = 'Math Homework Problem #' . $rand_prob;
$math_homework_solution = 'Math Homework Solution #' . $rand_soln;

if ($rand_prob === 1) {
    $result = "The math homework problem is: $math_homework_problem";
} else if ($rand_prob === 2) {
    $result = "The math homework problem is: $math_homework_problem and the solution is: $math_homework_solution";
} else if ($rand_prob === 3) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, and $math_homework_problem.";
} else if ($rand_prob === 4) {
    $result = "The math homework problem is: $math_homework_problem and the solution is: $math_homework_solution.";
} else if ($rand_prob === 5) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem.";
} else if ($rand_prob === 6) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem.";
} else if ($rand_prob === 7) {
    $result = "The math homework problem is: $math_homework_problem and the solution is: $math_homework_solution. The math homework problem is: $math_homework_problem and the solution is: $math_homework_solution.";
} else if ($rand_prob === 8) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem. The math homework problem is: $math_homework_problem and the solution is: $math_homework_solution.";
} else if ($rand_prob === 9) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem. The math homework problem is: $math_homework_problem, $math_homework_problem, and $math_homework_problem.";
} else if ($rand_prob === 10) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem.";
} else if ($rand_soln === 1) {
    $result = "The math homework solution is: $math_homework_solution";
} else if ($rand_soln === 2) {
    $result = "The math homework solution is: $math_homework_solution and the solution is: $math_homework_solution.";
} else if ($rand_soln === 3) {
    $result = "The math homework solution is: $math_homework_solution, $math_homework_solution, and $math_homework_solution.";
} else if ($rand_soln === 4) {
    $result = "The math homework solution is: $math_homework_solution, $math_homework_solution, $math_homework_solution, and $math_homework_solution.";
} else if ($rand_prob === 5) {
    $result = "The math homework problem is: $math_homework_problem. The math homework solution is: $math_homework_solution.";
} else if ($rand_soln === 6) {
    $result = "The math homework solution is: $math_homework_solution and the solution is: $math_homework_solution. The math homework problem is: $math_homework_problem.";
} else if ($rand_prob === 7) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, and $math_homework_problem. The math homework solution is: $math_homework_solution.";
} else if ($rand_prob === 8) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem. The math homework solution is: $math_homework_solution.";
} else if ($rand_prob === 9) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, and $math_homework_problem. The math homework solution is: $math_homework_solution and the solution is: $math_homework_solution.";
} else if ($rand_prob === 10) {
    $result = "The math homework problem is: $math_homework_problem, $math_homework_problem, $math_homework_problem, and $math_homework_problem. The math homework solution is: $math_homework_solution, $math_homework_solution, and $math_homework_solution.";
}
?>
