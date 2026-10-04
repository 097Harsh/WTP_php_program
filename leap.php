<?php

$year = 2026;

if ($year % 4 == 0 && $year % 100 != 0) {
    echo "$year is a Leap Year";
} else {
    echo "$year is not a Leap Year";
}

?>