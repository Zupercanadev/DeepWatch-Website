<?php

include_once("dbconnect.php");
include_once("authenticate.php");

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="makeUser.php" method='POST'>
	Username:
	<input type="text" name="makeUser[]">
	Password:
	<input type="text" name="makeUser[]">
	RealName:
	<input type="text" name="makeUser[]">
</form>


</body>


</html>