<?php

// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Ask the user to guess the number
echo "Guess a number between 1 and 10: ";
$guess = trim(fgets(STDIN));

// Check if the user's guess is equal to the random number
if ($guess == $randomNumber) {
    echo "You win! The number was $randomNumber.";
} else {
    echo "Sorry, that's not correct. The number was $randomNumber.";
}

?>