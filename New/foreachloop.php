<!DOCTYPE html>
<html>
<head>
	<title>Foreachloop</title>
</head>
<body>
<?php
	$car= array("Toyota","Suzuki","Audi","Benz");
		foreach ($car as $Mycar) {
			# code...
			echo $Mycar . "<br>";
		}
?>
<?php
	$Student=array("First_Name"=> "Charuni","Last_Name"=>"Rathnayake","Age"=>23);

		foreach ($Student as $Inialization => $Student_detail) {
			# code...
			echo $Student_detail;
		}
?>
</body>
</html>
