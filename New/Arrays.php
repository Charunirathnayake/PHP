<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php
$student=array("kamal","nimal","sunil","dimuth","20","30","50",array("Blue","Black","white","Yellow"));
echo print_r($student);
echo "<br>"
echo $student[1];
echo "<br>"
echo $student[2];
?>
<h3> After changing the Array
	</h3>
	<?php
	$student[3]="sunimal";
	echo "<br>";
	$student[4]="Ruwan";
	echo "<br>";
	$student[7][2]="Red";
	echo "<br>";
	$student[7][1]="Green";
	?>
</body>
</html>