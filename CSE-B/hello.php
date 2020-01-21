
<!DOCTYPE html>
<html>
<head>
	<title>inout details</title>
	
</head>
<body>
	<h1>Welcome </h1>
	first_name: <input id='first' type="text" placeholder="enter first name"><br>
	second_name: <input id='second' type="text" placeholder="enter second name"><br>
	<input id='btn' type="submit" placeholder="submit">
	<script type="text/javascript">
		document.getElementById('btn').onclick = function()
		{
			first_name=document.getElementById('first').value;
			second_name=document.getElementById('second').value;
			console.log(first_name+" "+second_name);
		}
	</script>
</body>
</html>