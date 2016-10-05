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
				<div id="logo" >
					
				</div>
			</div>
			<div style="background-color: ;float: left;width: 310px;padding-right: 20px;margin-left: 280px; border-radius:5px;"><br><br><br>
		<form action="login-script.php" method="POST">
			<table>
				<tr>
					<td><b>E-mail:</b></td>
					<td><input type="text" name="email" required="true" style = "height:25px; padding-left:10px;border-radius:5px;"></td>
				</tr>
				<br>
				<tr>
					<td><b>Password:</b></td>
					<td><input type="password" name="password" required="true" style = "height:25px; padding-left:10px;border-radius:5px;"></td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
		</div>
			
		</div>
	</div>
</body>
</html>