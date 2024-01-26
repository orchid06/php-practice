<?php

function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

$exampleNumber = 5;
$result = calculateFactorial($exampleNumber);
echo "The factorial of $exampleNumber is: $result";

?>
