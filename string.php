<?php
$string = "Hello World Welcome to PHP Programming";

echo "<h3>Original String:</h3>";
echo $string . "<br><br>";

/* 1. strlen() */
echo "<b>1. Length of String (strlen): </b>";
echo strlen($string);
echo "<br><br>";

/* 2. strpos() */
echo "<b>2. Position of 'World' (strpos): </b>";
echo strpos($string, "World");
echo "<br><br>";

/* 3. str_word_count() */
echo "<b>3. Number of Words (str_word_count): </b>";
echo str_word_count($string);
echo "<br><br>";

/* 4. strrev() */
echo "<b>4. Reverse String (strrev): </b>";
echo strrev($string);
echo "<br><br>";

/* 5. strtolower() */
echo "<b>5. Lowercase String (strtolower): </b>";
echo strtolower($string);
echo "<br><br>";

/* 6. strtoupper() */
echo "<b>6. Uppercase String (strtoupper): </b>";
echo strtoupper($string);
echo "<br><br>";
?>