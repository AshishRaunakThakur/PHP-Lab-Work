<?php
function mytest()
{
    $lang = "PHP";
    echo "Web development language:" . $lang;
}

mytest();
// using $lang (local variable) outside the function will generate an error 
echo $lang;

?>