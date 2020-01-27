<?php
require_once('dbconnection.php');
?>
<?php
	if(isset($_POST['btn'])){
	echo "dear, ".$_POST['username']."you r wlcm.".'<br>';
	$username= $_POST['username'];
	$age= $_POST['age'];
	$Contact= $_POST['Contact'];

	$sql="INSERT INTO users (username,age,Contact) VALUES ('$username','$age','$Contact')";
	mysqli_query($conn, $sql);
}
else{
	echo "welcome guest";
}
?>