<?php
function studentDetails($name, $enrollment, $semester)
{
    echo "Student Name: $name<br>";
    echo "Enrollment Number: $enrollment<br>";
    echo "Semester: $semester";
}

studentDetails("Ashish", "7310", "Semester 5");
?>