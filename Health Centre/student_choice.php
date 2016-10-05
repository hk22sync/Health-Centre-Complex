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
					<li>
						<a href="doctor_choice.php">Doctor Login</a>
					</li>
					<li class="selected">
						<a href="student_choice.php">Student</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
				<?php
				session_start();
				if (!isset($_SESSION['email']))
				{
				echo'
				<a href="login.php"><img src="login.jpg" height="30px" width="100px" align="right">';
				echo"<br><br><br><br>";
				echo'<a href="registration.php"><img src="register.jpg" height="30px" width="100px" align="right"></a>';
				}
				else{
					echo'<a href="edit_info.php"><img src="edit.jpg" height="30px" width="100px" align="right">';
					echo"<br><br><br><br>";
					echo'<a href="logout.php"><img src="logout2.jpg" height="30px" width="100px" align="right">';
				}
				?>
				<div id="logo">
					<STUDENT SECTION</a>
				</div>
			</div>
			<div >
				<div style="background-color: ;float: left;width: 310px;padding-right: 20px;margin-left: 280px; border-radius:5px;"><br><br><br>
				<center>
				</a><br><br>
				<a href="view.php" style="text-decoration:none"><b><font size="4">Click here to check medical history<font></b></a><br><br>
				
				<br>
				<a href="appointment.php" style="text-decoration:none"><b><font size="4">Click here to take appointment<font></b></a>
				</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>