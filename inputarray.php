<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter values separated by commas:
    <input type="text" name="arr">
    <input type="submit" value="Print Array">
</form>

<?php
if(isset($_POST['arr']))
{
    $array = explode(",", $_POST['arr']);

    echo "<h3>Array Values:</h3>";
    foreach($array as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>