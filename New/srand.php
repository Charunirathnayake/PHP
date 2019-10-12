<!DOCTYPE html>
<html>
<head>
	<title>template</title>
<?php 
include 'connection.php';
$stmt = $conn->prepare( "SELECT *
      FROM tblquiz ORDER BY rand()" );
      $stmt->execute();
?>


</head>
<body>
<?php 
$number = 0;
for($i=0; $row = $stmt->fetch(); $i++){
        $number++;  
        $id = $row['_id'];
        $question = $row['question'];
      $ans_array = array($row['answer1'],$row['answer2'],$row['answer3'],$row['correctanswer']);
     shuffle($ans_array);
?>

 <h4> <?php echo $number . ".) " . $question; ?></h4>   
 <label><input type="radio" value="<?php echo $ans_array[0]; ?>" name="<?php echo $question; ?>"> <?php echo $ans_array[0]; ?></label>
 <label><input type="radio" value="<?php echo $ans_array[1]; ?>" name="<?php echo $question; ?>"> <?php echo $ans_array[1]; ?></label>
 <label><input type="radio" value="<?php echo $ans_array[2]; ?>" name="<?php echo $question; ?>"> <?php echo $ans_array[2]; ?></label>
 <label><input type="radio" value="<?php echo $ans_array[3]; ?>" name="<?php echo $question; ?>"> <?php echo $ans_array[3]; ?></label>

<?php
}
?>
<br />
<br />
<input type="submit" value="Submit" name="submit">

</body>


</html>

















