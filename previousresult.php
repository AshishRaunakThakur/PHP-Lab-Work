<?php
// Constant
define("COLLEGE_NAME", "Marwadi University");

// Variables
$studentName = "Ashish Raunak";
$rollNo = 310;
$semester = "Semester 5";
$marks = 498;
$totalMarks = 500;
$percentage = ($marks / $totalMarks) * 100;

// Display Result
echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Roll Number: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Marks Obtained: " . $marks . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>