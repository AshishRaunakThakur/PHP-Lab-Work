<?php
function welcomeStudent()
{
    echo "Welcome Student!";
}

if(function_exists("welcomeStudent"))
{
    welcomeStudent();
}
else
{
    echo "Error: Function does not exist.";
}
?>