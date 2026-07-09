<?php

//indexed array or single dimensional array

$array_one=array("One","Two","Three");
$array_two=array("Four","Five",6,3.2);

//traverse array
//data extractions
foreach($array_one as $key => $one)
{
    echo "$key => $one ! ";
    echo "<br>";
}


echo "<pre>";
print_r($array_one);
echo "</pre>";


// Array functions
//push 
echo "<pre>";
print_r(array_push($array_one, "Four"));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";


//pop
echo "<pre>";
print_r(array_pop($array_one));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";


//merge
echo "<pre>";
$array_three=array_merge($array_one, $array_two);
print_r($array_three);
echo "</pre>";


//keys
echo "<pre>";
print_r(array_keys($array_one));
echo "</pre>";


//flip
echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";


//values
echo "<pre>";
print_r(array_values($array_one));
echo "</pre>";

?>