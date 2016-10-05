<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
<?php
		$con = mysqli_connect('localhost', 'root', '');
		$db = mysqli_select_db($con,'health');
		$email=$_SESSION['email'];
		$query = "SELECT s_id FROM student WHERE email='$email'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		$r= $row['s_id'];
		$date= date("Y-m-d");
		
	?>
	<div id="background">
		<div id="page">
			<div id="header">
				<ul id="navigation">
					<li >
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="consultants.php">Consultants</a>
					</li>
					<li>
						<a href="staff.php">Staff</a>
					</li>
					<li>
						<a href="doctor_choice.php">Doctor Login</a>
					</li>
					<li class="selected" >
						<a href="student_choice.php" >Student</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
				<div id="logo" >
					
				</div>
			</div>
			<div style="background-color: ;float: left;width: 310px;padding-right: 20px;margin-left: 280px; border-radius:5px;"><br>
			<form action="appointment-script.php" method="POST">
			<table>
				<tr>
					<td><b>Health Diary Number:</b></td>
					<td><input type="text" name="student_id" required="true" style = "height:25px; padding-left:10px;border-radius:5px;background-color:d8d8d8" value="<?php echo"$r"?>" readonly></td>
				</tr>
				<tr>
					<td><b>Date of appointment:</b></td>
					<td><input type="date" name="date" style = "height:25px; padding-left:10px;border-radius:5px;" min="<?php echo "$date"?>" value="<?php echo "$date"?>"></td>
				</tr>
				<tr>
					<td>
					</td><br><br>
					<td><br>
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>			
		</div>
	</div>
</body>
</html>