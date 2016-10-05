<html>
<body>
<center>
<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$student_id= $_POST['student_id'];
	$date=$_POST['date'];
	$query = "INSERT INTO appointment
		(student_id, date)
		VALUES
		('$student_id','$date')";
		if(mysqli_query($con,$query)){
		$lastid=mysqli_insert_id($con);
		echo "Your Appointment Number is : ".$lastid;echo "<br>";}
?>		
</center>
<br><br><br>
<center>
<a href="student_choice.php">Click here to go back</a>
</center>
</body>
</html>