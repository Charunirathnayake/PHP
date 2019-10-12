<!DOCTYPE html>
<html>
<head>
	<title>Array function</title>
</head>
<body>
<?php
$MyNumber=array(23,45,34,78,11,29,46);
 echo max($MyNumber);
 echo "<br>";
 echo min($MyNumber);
 echo "<br>";?>
 <pre><?php
 echo sort($MyNumber);
 echo "<br>";?></pre>
 <pre>
 <?php
 echo reverse sort($MyNumber);
 echo "<br>";
 ?>
</pre>
 <?php
  $StringArray= implode(" | ",$MyNumber);
  echo ($StringArray);
  echo "<br>";
  $ConvertArray=explode(" | ", $StringArray);
  echo ($ConvertArray);

?>
</body>
</html>
