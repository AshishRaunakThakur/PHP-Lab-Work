<?php
$age = 23;
$nationality = "Indian";

// Applying conditions on nationality and age
if ($nationality == "Indian") {
    if ($age >= 18) {
        echo "Eligible to give vote";
    } else {
        echo "Not eligible to give vote";
    }
}
?>