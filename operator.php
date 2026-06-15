<?php
$a = 20;
$b = 10;

// Arithmetic Operators
echo "<h3>Arithmetic Operators</h3>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// Comparison Operators
echo "<h3>Comparison Operators</h3>";
echo ($a == $b) ? "a is equal to b<br>" : "a is not equal to b<br>";
echo ($a > $b) ? "a is greater than b<br>" : "a is not greater than b<br>";

// Logical Operators
echo "<h3>Logical Operators</h3>";
if ($a > 0 && $b > 0) {
    echo "Both numbers are positive<br>";
}

// Assignment Operator
echo "<h3>Assignment Operator</h3>";
$c = $a;
echo "Value of c = " . $c . "<br>";
?>