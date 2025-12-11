<?php
// Function 1: Sum of two numbers
function sum($a, $b) {
    return $a + $b;
}

echo "Sum Function Output:<br>";
echo "Result1 = ". sum(5, 10) . "<br>";
echo "Result2 = " . sum(12, 8) . "<br><br>";


// Function 2: Factorial using recursion
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo "Factorial Function Output:<br>";
echo "Factorial of 5 = " . factorial(5) . "<br>";
echo "Factorial of 7 = " . factorial(7) . "<br><br>";


// Function 3: Prime number check
function is_prime($n) {
    if ($n < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Prime Check Function Output:<br>";
$num = 7;


    if (is_prime($num)) {
        echo "$num is a prime number<br>";
    } else {
        echo "$num is not a prime number<br>";
    }

?>