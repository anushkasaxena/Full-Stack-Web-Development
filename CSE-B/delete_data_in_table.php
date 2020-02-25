<?php
require_once('dbconnection.php');
?>

<?php
		$id = $_GET['id'];
		$sql = "DELETE FROM `users` where id = '$id'";
		$res = mysqli_query($conn, $sql);
		if($res)
		{
			header('Location:read_delete_update_in_one.php');
		}
		else
		{
			echo "not found";
		}
?>


