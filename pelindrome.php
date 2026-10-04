<?php

$input = 1235321;
$number = $input;
$sum = 0;

while ($number > 0) {
    $rem = $number % 10;
    $sum = $sum * 10 + $rem;
    $number = floor($number / 10);
}

if ($input == $sum) {
    echo "$input is a Palindrome number";
} else {
    echo "$input is not a Palindrome number";
}

?>