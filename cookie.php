<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$name="message";
		$value="Have a great day";
		$expire=time()+60*60*24*7;
		setcookie($name,$value,$expire);
	?>
</body>
</html>