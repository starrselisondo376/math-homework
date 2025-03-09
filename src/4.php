<?php
// Weekly Math Homework Problems and Solutions
$problems = array(
  "1+1=2",
  "5x3=15",
  "4x5=20",
  "7-3=4",
  "9/3=3",
  "16/4=4",
  "12+11=23",
  "8x2=16",
  "6x4=24",
  "2x5=10",
  "7+1=8",
  "3x9=27"
);
$solutions = array(
  "2",
  "15",
  "20",
  "4",
  "3",
  "4",
  "23",
  "16",
  "24",
  "10",
  "8",
  "27"
);
$i = rand(0, count($problems) - 1);
echo "<h2>Weekly Math Homework Problem #" . ($i + 1) . "</h2>";
echo "<p><b>" . $problems[$i] . "</b></p>";
echo "<p>Solution: " . $solutions[$i] . "</p>";
?>