<?php
require_once('dbconnection.php');
?>

<?php

	$x=0;

	if(isset($_POST['btn'])){
	echo "dear, "."\nyou r wlcm.";
	$id = $_POST['id'];
	$Contact= $_POST['Contact'];

	$sql = "SELECT * FROM `users` where id = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result->num_rows == 1)
	{
		$sql = "UPDATE `users` SET Contact = '$Contact' where id = '$id'";
		$res = mysqli_query($conn, $sql);
		if($res)
		{
			$x=1;
			echo "<h2> Contact updated";
		}
		else
		{
			echo "<h2> Contact not updated";
		}
	}
	else
	{
		echo " id not found";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>update data in table</title>
</head>
<body>
	<?php
	if($x==0){
	?>
	<form action="update_data_in_table.php" method="post">
		
		ID: <input type="text" name="id" placeholder="enter your id">
		Contact: <input type="text" name="Contact" placeholder="your new contact"><br>
		<input type="submit" name="btn">
	</form>
<?php
}
?>

</body>
</html>