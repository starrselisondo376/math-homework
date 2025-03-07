 <?php
// Function to generate random numbers between 1 and 10
function getRandomNumber() {
    $num = rand(1, 10);
    return $num;
}

// Function to generate random math problems
function getMathProblem($num) {
    // Generate a random operation (+, -, x, /)
    $op = rand(1, 4);

    if ($op == 1) {
        $problem = "What is " . $num . " + " . getRandomNumber() . "?";
    } elseif ($op == 2) {
        $problem = "What is " . $num . " - " . getRandomNumber() . "?";
    } elseif ($op == 3) {
        $problem = "What is " . $num . " x " . getRandomNumber() . "?";
    } else {
        $denominator = getRandomNumber();
        if ($denominator == 0) {
            $denominator = 1;
        }
        $problem = "What is " . $num . " / " . $denominator . "?";
    }

    return $problem;
}

// Function to generate random math solutions
function getMathSolution($problem) {
    // Extract the numbers from the problem
    preg_match('/What is ([0-9]+) \+? ?([0-9]*)\?? /', $problem, $matches);
    $num1 = $matches[1];
    if (isset($matches[2])) {
        $num2 = $matches[2];
    } else {
        $num2 = 0;
    }

    // Calculate the solution
    $solution = 0;
    switch ($problem) {
        case "What is $num1 + $num2?":
            $solution = $num1 + $num2;
            break;
        case "What is $num1 - $num2?":
            $solution = $num1 - $num2;
            break;
        case "What is $num1 x $num2?":
            $solution = $num1 * $num2;
            break;
        case "What is $num1 / $num2?":
            if ($num2 == 0) {
                $solution = 'Division by zero!';
            } else {
                $solution = $num1 / $num2;
            }
            break;
        default:
            $solution = 'Invalid problem!';
    }

    return $solution;
}

// Generate a random math problem and solution
$problem = getMathProblem(getRandomNumber());
echo $problem . "\n";
echo "Answer: " . getMathSolution($problem) . "\n\n";

?>