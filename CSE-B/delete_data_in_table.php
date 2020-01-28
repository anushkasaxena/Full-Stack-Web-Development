<?php
require_once('dbconnection.php');
?>

<?php

	$x=0;

	if(isset($_POST['btn'])){
	echo "dear, "."\nyou r wlcm.";
	$id = $_POST['id'];
	$sql = "SELECT * FROM `users` where id = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result->num_rows == 1)
	{
		$sql = "DELETE FROM `users` where id = '$id'";
		$res = mysqli_query($conn, $sql);
		if($res)
		{
			$x=1;
			echo "<h2> DELETED";
		}
		else
		{
			echo "<h2> NOT DELETED";
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
	<form action="delete_data_in_table.php" method="post">
		
		ID: <input type="text" name="id" placeholder="enter your id">
		
		<input type="submit" name="btn">
	</form>
<?php
}
?>

</body>
</html>