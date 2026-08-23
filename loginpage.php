<?php
$username = "admin";
$password = "12345";

$inputUser = "admin";
$inputPass = "12345";

if($inputUser == $username && $inputPass == $password)
{
    echo "Login Successful";
}
else
{
    echo "Invalid Username or Password";
}
?>