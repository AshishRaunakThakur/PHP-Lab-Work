<?php

/*Create a function named calculatePercentage() that:

Accepts marks of 5 subjects.

Calculates total marks.

Returns percentage.*/

function calculatePercentage($marks)
{
    $totalMarks = array_sum($marks);
    $percentage = ($totalMarks / (count($marks) * 100)) * 100;
    return $percentage;
}

$marks = [85, 90, 78, 92, 88];
$percentage = calculatePercentage($marks);      
echo "Total Marks: " . array_sum($marks) . "<br>";
echo "Percentage: " . $percentage . "%<br>";

?>