<?php
// Outer loop
for ($i = 1; $i <= 3; $i++) {

    // Inner loop
    for ($j = 1; $j <= 3; $j++) {

        if (!($i == $j)) {
            continue; // Skip when i and j are not equal
        }

        echo $i . $j;
        echo "<br>";
    }
}
?>