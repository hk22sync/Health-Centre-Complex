<?php 
session_start();
if (isset($_SESSION['d_id']))
	header('location: doctorhome.php');

error_reporting(0);
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
					<li class="selected">
						<a href="doctor_choice.php">Doctor Login</a>
					</li>
					<li  >
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
			<form action="script.php" method="POST">
			<table>
				<tr>
					<td><b>User ID:</b></td>
					<td><input type="text" name="contact" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" placeholder="10-digit"></td>
							
				</tr>
				<tr>
					<td><b>Password:</b></td>
					<td><input type="password" name="password" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" value=""></td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" value="LOGIN">
					</td>
				</tr>
			</table>
		</form>		
		</div>
	</div>
</body>
</html>