<?php
//Types of functions
//1.Built-in functions
//2.UDF
//String functions are built-in functions.

$str1="          Ashish        ";
$str2="Raunak";

echo $str1. "  " . $str2;
echo "<br>";
print("print" . " " . $str1 . " " . $str2);
echo "<br>";

echo strlen($str1);
echo "<br>";
echo strlen($str2);
echo "<br>";
echo strlen($str1 . " " . $str2 );
echo "<br>";
echo strtoupper($str1);
echo "<br>";
echo strtolower($str2);
echo "<br>";
$trimmeddata = trim($str1);
echo strlen($trimmeddata . " " . $str2);
echo "<br>";
$trimmeddata = rtrim($str1);
echo strlen($trimmeddata . " " . $str2);
echo "<br>";
$trimmeddata = ltrim($str1);
echo strlen($trimmeddata . " " . $str2);
echo "<br>";

echo "Before trim ";
echo strlen($str1 . $str2);
echo "<br>";
$trimmeddata = rtrim($str1);
echo "After trim ";
echo strlen($trimmeddata . $str2);
echo "<br>";
echo str_replace($str1, "Ashish", $str1);
echo "<br>";
echo strrev($str1);
echo "<br>";    
echo strcmp("Hello","Hello");
echo "<br>";
echo ucwords("i am student in marwadi university");
echo "<br>";
echo ucfirst("i am student in marwadi university");
echo "<br>";
echo strstr($str1,"A");
echo "<br>";
echo stristr($str1,"A");
//stristr() i stands for case sensitive data
?>