<?php
//require_once('dbconnection');
if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	echo "$fname\n$lname";

}
else
	echo "abc";
?>