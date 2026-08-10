<?php
setcookie("user", "Meenal", time() + 300);

if (isset($_COOKIE["user"])) {
    echo "Cookie Value: " . $_COOKIE["user"];
} else {
    echo "Cookie has been created. Refresh the page to see its value.";
}
?>
