<?php

$date1=date('d-M-y');
echo $date1;
echo "<br>";


//unix timestamp of system
$date1=date('today');
echo $date1;
echo "<br>";

date_default_timezone_set('Asia/Kolkata');
$date1=date('d-M-y : H:i:s');
echo $date1;


$date_1= new DateTime('2026-7-7');
$date_2= new DateTime('2006-7-7');

$finalDate=date_diff($date_1,$date_2);

echo "<br>";
echo $finalDate -> format('%y');


?>