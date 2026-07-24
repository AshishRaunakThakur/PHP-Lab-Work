<?php

//Write a PHP program for operators in PHP.

$a = 15;
$b = 4;

echo "<h3>1. Arithmetic Operators</h3>";
echo "Addition ($a + $b): " . ($a + $b) . "<br>";
echo "Subtraction ($a - $b): " . ($a - $b) . "<br>";
echo "Multiplication ($a * $b): " . ($a * $b) . "<br>";
echo "Division ($a / $b): " . ($a / $b) . "<br>";
echo "Modulus ($a % $b): " . ($a % $b) . "<br>";

echo "<h3>2. Assignment Operators</h3>";
$c = $a; 
echo "Value assigned to \$c: " . $c . "<br>";
$c += 5; 
echo "Value after \$c += 5: " . $c . "<br>";

echo "<h3>3. Comparison Operators</h3>";
echo "Is \$a equal to \$b? " . var_export($a == $b, true) . "<br>";
echo "Is \$a greater than \$b? " . var_export($a > $b, true) . "<br>";
echo "Is \$a not equal to \$b? " . var_export($a != $b, true) . "<br>";

echo "<h3>4. Logical Operators</h3>";
$x = true;
$y = false;
echo "Logical AND (\$x && \$y): " . var_export($x && $y, true) . "<br>";
echo "Logical OR (\$x || \$y): " . var_export($x || $y, true) . "<br>";
echo "Logical NOT (!\$x): " . var_export(!$x, true) . "<br>";
?>