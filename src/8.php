// Generate random numbers between 1 and 10
$num1 = rand(1, 10);
$num2 = rand(1, 10);

// Addition
echo $num1 + $num2;

// Subtraction
echo $num1 - $num2;

// Multiplication
echo $num1 * $num2;

// Division
if ($num2 != 0) {
    echo $num1 / $num2;
} else {
    echo "Cannot divide by zero";
}

// Modulus
echo $num1 % $num2;
?>