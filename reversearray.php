<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter array values separated by commas:
    <input type="text" name="arr">
    <input type="submit" value="Reverse Array">
</form>

<?php
if(isset($_POST['arr']))
{
    $array = explode(",", $_POST['arr']);

    $reverse = array_reverse($array);

    echo "<h3>Reversed Array:</h3>";

    foreach($reverse as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>