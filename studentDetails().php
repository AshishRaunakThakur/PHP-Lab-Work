<?php

/*  Create a function named studentDetails() that accepts:

Student Name

Enrollment Number

Semester */

function studentDetails($name, $enrollment, $semester)
{
    echo "<h3>Student Details</h3>";
    echo "Student Name: $name<br>";
    echo "Enrollment Number: $enrollment<br>";
    echo "Semester: $semester<br><br>";
}

studentDetails("Meenal Patro", "92400527259", "5th Semester");

?>