<?php

//debugging data
//echo "<pre>";
//print_r($_POST);    
//echo "</pre>";

$user=$_POST['id'];
$pass=$_POST['pass'];

if($user=="Admin" && $pass=="patro") 
{
    //echo "Welcome Admin";
    header("location:dashboard.php");
} 
else 
{
    echo "Wrong Username or Password ";
}










?>