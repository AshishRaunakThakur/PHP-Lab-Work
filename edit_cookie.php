<?php 
?> 
<html> 
<body> 
<?php 
	setcookie("user", "Developer", time()+300);  //Will be deleted after 5 Minutes
	echo "<br/>Cookie Value: " . $_COOKIE["user"]; 
?> 
</body> 
</html>