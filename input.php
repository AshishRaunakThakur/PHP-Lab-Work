<!DOCTYPE html>
<html>
<head>
    <title>User Input</title>
</head>
<body>

<form method="post">
    Enter Your Name:
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['username']))
{
    $name = $_POST['username'];
    echo "<h3>Welcome, $name</h3>";
}
?>

</body>
</html>