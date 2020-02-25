<?php
require_once('dbconnection.php');
?>
<?php
$id = $_GET['id'];
?>
<?php
$sql = "SELECT * FROM `users` WHERE id = $id";
$res = mysqli_query($conn,$sql);
if($res)
{
	$row = mysqli_fetch_array($res);
	$username = $row['username'];
	$age = $row['age'];
	$Contact = $row['Contact'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
</head>
<body>
	<form action="update_data_in_table.php" method = "post">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="text" name="username" value="<?php echo $username;?> ">
		<input type="text" name="age" value="<?php echo $age;?> ">
		<input type="text" name="Contact" value="<?php echo $Contact;?> ">
		<input type="submit" name="submit" value="Update">

	</form>

</body>
</html>