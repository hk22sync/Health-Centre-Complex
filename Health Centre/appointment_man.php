<?php 
session_start();
if (!isset($_SESSION['d_id']))
	header('location: doctor_login.php');

?>
<html>
<body>
<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$date= date("Y-m-d");
	$appointment_id=$_POST['aid'];
	$student_id=$_POST['sid'];
	$did=$_SESSION['d_id'];
?>
<a href="doctor_appointment_view.php"><img src="back.png" height="40px" width="100px"  align="left"></a>
<center>
<div style="background-color: #EEEEEE;width: 310px;padding-right: 20px; border-radius:5px;">
<form action="appointment_man_script.php" method="post">
	<table>
		<tr>
					<td>Appointment Id:</td>
					<td><input  type="text" name="aid2" required="true" value="<?php echo "$appointment_id"?>" style = "height:25px; padding-left:10px;border-radius:5px;background:#d8d8d8" readonly></td>
		</tr>
		<tr>
					<td>Doctor Id:</td>
					<td><input type="text" name="did2" required="true" value="<?php echo "$did"?>" style = "height:25px; padding-left:10px;border-radius:5px;background:#d8d8d8" readonly></td>
		</tr>
		<tr>
					<td>Student Id:</td>
					<td><input type="text" name="sid2" required="true" value="<?php echo "$student_id"?>" style = "height:25px; padding-left:10px;border-radius:5px;background:#d8d8d8" readonly></td>
		</tr>
		
		<tr>
					<td>Date:</td>
					<td><input type="text" name="date2" required="true" value="<?php echo "$date"?>" style = "height:25px; padding-left:10px;border-radius:5px;background:#d8d8d8" readonly></td>
		</tr>
		<tr>
					<td>Problem:</td>
					<td><input type="text" name="problem" required="true"  style = "height:25px; padding-left:10px;border-radius:5px;" ></td>
		</tr>
		<tr>
					<td>Admission required:</td>
					<td><select name="admitted" style = "height:25px; padding-left:10px;border-radius:5px;">
							<option value="yes">Yes</option>
							<option value="no">No</option>
							
							
							
							
						</select>		</td>
		</tr>
		<tr>
					<td>Medicine & Dosage </td>
					<td><input type="text" name="medicine" required="true"  style = "height:150px; padding-left:10px;border-radius:5px;" ></td>
		</tr>
		<tr>
					<td>Diagnosis:</td>
					<td><input type="text" name="diagnosis" required="true"  style = "height:25px; padding-left:10px;border-radius:5px;" ></td>
		</tr>
		<tr>
					<td></td>
					<td><input type="submit" name="done" required="true"  style = "height:25px; padding-left:10px;border-radius:5px;" ></td>
		</tr>
		
		
	</table>
	
</form>
</div>
</center>
</body>
<html>