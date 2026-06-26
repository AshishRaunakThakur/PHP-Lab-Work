<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter First Array:
    <input type="text" name="arr1"><br><br>

    Enter Second Array:
    <input type="text" name="arr2"><br><br>

    <input type="submit" value="Merge Arrays">
</form>

<?php
if(isset($_POST['arr1']) && isset($_POST['arr2']))
{
    $array1 = explode(",", $_POST['arr1']);
    $array2 = explode(",", $_POST['arr2']);

    $merged = array_merge($array1, $array2);

    echo "<h3>Merged Array:</h3>";

    foreach($merged as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>