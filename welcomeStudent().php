<?php

/* To verify whether a function exists before calling it.
Create a function named welcomeStudent().

Use function_exists() to check its existence.

If the function exists, call it.

Otherwise display an error message.*/

function welcomeStudent()
{
    echo "Welcome to Marwadi University!<br><br>";
}
if (function_exists('welcomeStudent')) 
{
    welcomeStudent();
} 
else 
{
    echo "Error: Function 'welcomeStudent' does not exist.<br><br>";
}

?>  