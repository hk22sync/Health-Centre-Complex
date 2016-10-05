<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
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
					<li>
						<a href="student_choice.php">Student</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
				<div id="logo">
					<a>Doctor Login</a>
				</div>
			</div>
			<div >
				<div style="background-color: ;float: left;width: 310px;padding-right: 20px;margin-left: 280px; border-radius:5px;"><br>
				<center>
				<?php
				session_start();
				if (!isset($_SESSION['d_id']))
				
				echo'<a href="doctor_login.php"><b><font size="5">Click here to sign in</font></b></a>';
				else{
				echo'<a href="doctor_logout.php"><b><font size="5">Click here to logout</font></b></a>';
				echo"<br><br><br><br>";
				echo'<a href="doctor_appointment_view.php"><b><font size="5">Click here to view apppointments</font></b></a>';
				}
				?>
				</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>