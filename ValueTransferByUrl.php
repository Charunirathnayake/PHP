<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$name="kamal";
	$email="kamal@gmail.com";
	$Id=454574;
	$str="name={$name}&email={$email}&Id={$Id}";
?>
<a href="destination.php?<?php echo("$str")?>">Destination</a>

</body>
</html>