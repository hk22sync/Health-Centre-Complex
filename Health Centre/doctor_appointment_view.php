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
	$query = "SELECT * FROM appointment WHERE date='$date'";
	$result = mysqli_query($con,$query);
	
	echo"<center><table>
	
			<tr>
					<td>Appointment Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td>Health Diary Number:</td>
					</tr>
			</table></center>";
	
	if($result)
	{
		
		
		while($row = mysqli_fetch_array($result))
		{$appointment_id=$row['a_id'];
		$student_id=$row['student_id'];	
			?>
			
			<center>
			<div style="background-color: #EEEEEE;width: 400px; height:50px;padding-right: 20px; border-radius:5px;">
			<form action="appointment_man.php" method="post">
				<table>
					
					<tr>
						<td><input type="text" name="aid" value="<?php echo"$appointment_id"?>" readonly style="background-color:d8d8d8"></td>
						<td><input type="text" name="sid" value="<?php echo"$student_id"?>" style="background-color:d8d8d8" readonly></td>
						<td><input type="submit" value="proceed"></td>
					</tr>
					
				</table>
			</form>	
			</center>
			</div>
			<?php
				
			
		}
			
	}?><br><center>
	<a href="doctor_choice.php"><img src="back.png" height="40px" width="100px"  ></a></center>
</body>
</html>	