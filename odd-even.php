<?php

function checkOddEven($number) {
    if ($number % 2 == 0) {
        echo "$number is an even number.";
    } else {
        echo "$number is an odd number.";
    }
}


$exampleNumber = 15; 
checkOddEven($exampleNumber);

?>
