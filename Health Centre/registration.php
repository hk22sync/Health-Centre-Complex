<!DOCTYPE html>
<?php 
session_start();
if (isset($_SESSION['email']))
	header('location: gotologout.php');
?>
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
			<div style="background-color: ;float: left;width: 310px;padding-right: 20px;margin-left: 280px; border-radius:5px;"><br>
		<table>
			<form action="reg-script.php" method="post">
				<tr>
					<td><b>First name:</b></td>
					<td><input  type="text" name="fname" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" pattern="[A-Za-z]+"></td>
				</tr>
				<tr>
					<td><b>Last name:</b></td>
					<td><input type="text" name="lname" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" pattern="[A-Za-z]+"></td>
				</tr>
				<tr>
					<td><b>E mail:</b></td>
					<td><input type="email" name="email" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
				</tr>
				<tr>
					<td> <b>Faculty:</b></td>
					<td>
						<select name="faculty" style = "height:25px; padding-left:10px;border-radius:5px;">
							<option value="arts">Arts</option>
							<option value="ayurveda">Ayurveda</option>
							<option value="commerce">Commerce</option>
							<option value="education">Education</option>
							<option value="iit">IIT</option>
							<option value="ims">IMS</option>
							<option value="law">Law</option>
							<option value="management studies">Management Studies</option>
							<option value="performing arts">Performing Arts</option>
							<option value="sanskrit vidya dharma vijnan sankaya">SVDM Sankaya</option>
							<option value="science">Science</option>
							<option value="science">Social Science</option>
							<option value="visual arts">Visual Arts</option>
							
							
							
						</select>		
					</td>
				</tr>
				
				<tr>
					<td><b>Institute roll no:</b></td>
					<td><input type="text" name="roll" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" ></td>
				</tr>
				<tr>
					<td><b>Date of birth:</b></td>
					<td><input type="date" name="dob" style = "height:25px; padding-left:10px;border-radius:5px;"></td>
				</tr>
				<tr>
					<td> <b>Blood Group:</b></td>
					<td>
						<select name="blood" style = "height:25px; padding-left:10px;border-radius:5px;">
							<option value="O-">O-</option>
							<option value="O+">O+</option>
							<option value="A-">A-</option>
							<option value="A+">A+</option>
							<option value="B-">B-</option>
							<option value="B+">B+</option>
							<option value="AB-">AB-</option>
							<option value="AB+">AB+</option>
							
						</select>		
					</td>
				</tr>
				<tr>
					<td> <b>Gender:</b></td>
					<td>
						<select name="gender" style = "height:25px; padding-left:10px;border-radius:5px;">
							<option value="m">Male</option>
							<option value="f">Female</option>
							
							
						</select>		
					</td>
				</tr>
				<tr>
					<td><b>Contact:</b></td>
					<td><input type="text" name="contact" style = "height:25px; padding-left:10px;border-radius:5px;"  pattern="[0-9]{10}" maxlength="10"></td>
				</tr>
				
				<tr>
					<td><b>Address:</b></td>
					<td><input type="text" name="address" required="true" style = "height:25px; padding-left:10px;border-radius:5px;"></td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" value="Submit">
					</td>
				</tr>
			</form>
		</table>
		</div>
		
			
		</div>
	</div>
</body>
</html>