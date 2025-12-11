<?php
// Declare and initialize variables
$name = "Ayesha";  
$age = 21;           
$height = 5.4;    
$isStudent = true;     

// Arithmetic operations
$num1 = 15;
$num2 = 6;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

// Output arithmetic results
echo "Addition: $addition <br>";
echo "Subtraction: $subtraction <br>";
echo "Multiplication: $multiplication <br>";
echo "Division: $division <br>";

// Output the sum using echo and print
echo "Sum using echo: " . ($num1 + $num2) . "<br>";
print "Sum using print: " . ($num1 + $num2) . "<br><br>";

// Using var_dump() to show types and values
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($height);
echo "<br>";
var_dump($isStudent);
echo "<br>";
?>