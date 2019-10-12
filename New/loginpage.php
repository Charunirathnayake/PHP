<?php
	$host="localhost";
	$username="root";
	$pass="";
	$db="demo";
	mysql_connect($host,$username,$pass);
	mysql_select_db($db);
	if(isset($_POST['username'])){
		$A=$_POST[username];
		$B=$_POST[pass];

		$sql="select * from loginform where username='".$A."'AND pass='".$B." limit=1";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)==1){
			echo "You have successfully login";
		}
		else{
			echo "You entered incorrect password ";
		}

	}

?>











<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#">
		<input type="text" name="username" placeholder="Username">
		<br>
		<br>
		<input type="password" name="pass" placeholder="Password">
		<br>
		<br>
		<input type="submit" name="submit" placeholder="submit">
	</form>
</body>
</html>