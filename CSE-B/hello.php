<?php
	require_once('dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>input details</title>
	
</head>
<body>
	<h1>Welcome </h1>
	<form action="uploadDatafromhello.php" method="post">
	first_name: <input id='first' type="text" placeholder="enter first name" name="fname"><br>
	second_name: <input id='second' type="text" placeholder="enter second name" name="lname"><br>
	<input id='btn' type="submit" placeholder="submit" name="submit">
</form>
</body>
</html>