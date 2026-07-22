<?php

//Cookie is a persistant storage but with a expiry timeline.
//for performance tracing of website
//store information related to user search data.
//data stored in cookies converted to tables.


// //creating a cookie
setcookie("user", "Meenal", time() + 300); 

//editing a cookie
setcookie("user", "developer", time() + 300);

//deleting a cookie
setcookie("user", "developer", time() - 300);

//reading a cookie
echo $_COOKIE['user'];




?>
