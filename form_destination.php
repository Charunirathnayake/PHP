<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php 
		if(isset($_POST['submit'])){
			echo "Name: {$_POST['Name']} <br> ";
			echo "Age:{$_POST['Age']} <br>";
			echo "Gender:{$_POST['Gen']}<br>";
			echo "Email:{$_POST['Email']}<br>";
		}
		else{
			echo "Form was not submitted.";
		}
		?>
</body>
</html>