<?php
require_once("dbconnection.php");
?>
<html>
<head>
	<title>input form</title>
</head>
<body>
	<form action="details.php" method="post">
		Name: <input type="text" name="username" placeholder="enter username">
		<br>
		Age: <input type="text" name="age" placeholder="age"><br>
		Contact: <input type="text" name="Contact" placeholder="contact"><br>
		<input type="submit" name="btn">
	</form>
</body>
</html>
