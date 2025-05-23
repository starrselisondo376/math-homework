<?php
// Problem 1
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

// Problem 2
function findMaxValue($array) {
    $maxVal = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $maxVal) {
            $maxVal = $array[$i];
        }
    }
    return $maxVal;
}

// Problem 3
function sortArray($array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = 0; $j < count($array) - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Problem 4
function calculateArea($length, $width) {
    return $length * $width;
}
