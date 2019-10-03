<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$Hobby="Reading & Singing are hobbies";
?>
<a href="URL_encode_destination.php?hobbies=<?php echo urlencode($Hobby);?>">
	Hobbies</a>

</body>
</html>