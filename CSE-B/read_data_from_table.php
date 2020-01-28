<?php
require_once('dbconnection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	table,th,td {
	
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  
  padding-top: 50px;
}
tr:nth-child(even) {
  background-color: #f1f1f1;}
  table#t01 tr:nth-child(odd) {
 background-color: #fff;
}

</style>

<title>read data from db</title>

</head>

<body>
	<table width="100%">
		<caption><h2><u><b><i>Personal Details</i></h2></u></b></caption>
		<br>
		<br>
		<tr>
			<th><h3><i>ID</i></h3></th>
			<th><h3><i>USERNAME</i></h3></th>
			<th><h3><i>AGE</i></h3></th>
			<th><h3><i>CONTACT</i></h3></th>
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
	</TR>
<?php
}
}
?>
</table>
</body>
</html>