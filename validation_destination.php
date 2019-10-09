<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			$name=$_POST['Name'];
			$age=$_POST['Age'];
			$email=$_POST['Email'];

			if (strlen($name)<10) {
				echo "Username is too short";
			}
			elseif (!is_numeric($age)) {
				echo "Please enter numeric value";
			}
			elseif (empty($email)) {
				echo "Please enter valid email";
			}
			else{
				echo "Your logging successful";
			}

		}
		else{
			echo "Form was not submitted.";
		}
		?>
			

</body>
</html>