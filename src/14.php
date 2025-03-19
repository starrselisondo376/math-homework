 <?php
// Random number generator function
function getRandomNumber($min, $max) {
  return mt_rand($min, $max);
}

// Generate a random math problem
$number1 = getRandomNumber(0, 10);
$operator = getRandomOperator();
$number2 = getRandomNumber(0, 10);

echo "What is $number1 $operator $number2?";

function getRandomOperator() {
  $operators = ['+', '-', '*', '/'];
  return $operators[array_rand($operators)];
}
?>