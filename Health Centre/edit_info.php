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
		$query = "SELECT *FROM student WHERE email='$email'";
		$result = mysqli_query($con,$query);
	    $row = mysqli_fetch_array($result);
		
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
			<table>
			<form action="edit-script.php" method="post">
				<tr>
					<td><b>First name:</b></td>
					<td><input type="text" pattern="[A-Za-z]+" name="fname" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" value="<?php echo "$row[fname]"?>"></td>
				</tr>
				<tr>
					<td><b>Last name:<b></td>
					<td><input type="text" pattern="[A-Za-z]+" name="lname" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" value="<?php echo "$row[lname]"?>"></td>
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
					<td><input type="text" name="roll" required="true" style = "height:25px; padding-left:10px;border-radius:5px;" value="<?php echo "$row[roll]"?>"></td>
				</tr>
				<tr>
					<td><b>Date of birth:</b></td>
					<td><input type="date" name="dob" style = "height:25px; padding-left:10px;border-radius:5px;" value="<?php echo "$row[dob]"?>"></td>
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
					<td><b> Gender:</b></td>
					<td>
						<select name="gender" style = "height:25px; padding-left:10px;border-radius:5px;">
							<option value="m">Male</option>
							<option value="f">Female</option>
							
							
						</select>		
					</td>
				</tr>
				<tr>
					<td><b>Contact:</b></td>
					<td><input type="text" name="contact" pattern="[0-9]{10}" maxlength="10" style = "height:25px; padding-left:10px;border-radius:5px;" value="<?php echo "$row[contact]"?>"></td>
				</tr>
				
				<tr>
					<td><b>Address:</b></td>
					<td><input type="text" name="address" required="true"  style = "height:25px; padding-left:10px;border-radius:5px;" value="<?php echo "$row[address]"?>"></td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" value="Save Changes">
					</td>
				</tr>
			</form>
		</table>
			
		</div>
	</div>
</body>
</html>