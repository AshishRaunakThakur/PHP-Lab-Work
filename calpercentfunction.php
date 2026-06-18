<?php
function calculatePercentage($m1, $m2, $m3, $m4, $m5)
{
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = ($total / 500) * 100;

    echo "Total Marks: $total<br>";

    return $percentage;
}

$percentage = calculatePercentage(85, 78, 90, 88, 80);

echo "Percentage: $percentage%";
?>