<?php

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}


$exampleYear = 2024; 
if (isLeapYear($exampleYear)) {
    echo "$exampleYear is a leap year.";
} else {
    echo "$exampleYear is not a leap year.";
}

?>
