<?php 
session_start();
if (!isset($_SESSION['d_id']))
	header('location: doctor_login.php');

?>
<html>
<body>
<center><br><br>
<?php
$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	
$appointment_id = $_POST['aid2'];
$did = $_POST['did2'];
$sid = $_POST['sid2'];
$date = $_POST['date2'];
$problem = $_POST['problem'];
$admitted = $_POST['admitted'];
$medicine = $_POST['medicine'];
$diagnosis = $_POST['diagnosis'];
$x= "SELECT dfname,dlname FROM doctor WHERE d_id=".$did;
	$result = mysqli_query($con, $x);
	$row=mysqli_fetch_row($result);
	$name=$row[0].$row[1];
$query = "INSERT INTO med_history
		(appointment_id, d_id,doctor, s_id, date, problem, admitted, medicine,diagnosis)
		VALUES
		('$appointment_id','$did','$name','$sid','$date','$problem','$admitted', '$medicine','$diagnosis')";
		if(mysqli_query($con,$query))
		{echo "Successful Submission";
	}
		
			
		
		
?>
</center><br><br><br>
<center>
<a href="doctor_appointment_view.php">View pending appointments</a>
</center>
</body>
</html>