<?php
require_once('dbconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	

<title>read_DELETE_UPDATE data from db</title>

<script type="text/javascript">
	function alertfunction()
	{
		var txt;
		if(confirm("Do you really want to delete this?")){
			return true;
		}else{
			window.location.reload(false);
			return false;
		}
	}
</script>
</head>

<body>
	<div style="margin-left: 40px , margin-right: 40px">
	<caption><h2><u><b><i>Personal Details</i></h2></u></b></caption>
	<table class="table table-condensed table-bordered">
		
		<br>
		<br>
		<tr>
			<th><h3><i>ID</i></h3></th>
			<th><h3><i>USERNAME</i></h3></th>
			<th><h3><i>AGE</i></h3></th>
			<th><h3><i>CONTACT</i></h3></th>
			<th><h3><i>UPDATE</i></h3></th>
			<th><h3><i>DELETE</i></h3></th>
		</tr>
		
	
	<?php
		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);
		 
		if($result->num_rows > 0){
			while ($data = $result->fetch_assoc()) {
				# code...
			 $id = $data['id'];
			 $username = $data['username'];
			 $age = $data['age'];
			 $Contact = $data['Contact'];
	?>

	<TR>
			<TD><?php echo $id; ?></TD>
			<TD><?php echo $username; ?></TD>
			<TD><?php echo $age; ?></TD>
			<TD><?php echo $Contact; ?></TD>
			<TD><a href = "update_data_in_table.php?id=<?php echo $id; ?>">EDIT</a></TD>
			<TD><a onclick="return alertfunction()" href="delete_data_in_table.php?id=<?php echo $id; ?>">DELETE</a></TD>
	</TR>
<?php
}
}
?>
</table>
</div>
</body>
</html>