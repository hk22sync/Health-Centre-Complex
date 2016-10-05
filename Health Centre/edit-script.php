<?php 
session_start();
if (!isset($_SESSION['email']))
	header('location: login.php');

?>
<html>
	<body><center>
		<?php
			$con = mysqli_connect('localhost', 'root', '');
			$db = mysqli_select_db($con,'health');
			$fname = $_POST['fname'];
			
			
	
			$lname = $_POST['lname'];
			
			$email=$_SESSION['email'];
	
			$faculty= $_POST['faculty'];
	
			$roll = $_POST['roll'];
			
			$dob= $_POST['dob'];
				
			$blood= $_POST['blood'];
	
			$gender= $_POST['gender'];
	
			$contact = $_POST['contact'];
			
			$address = $_POST['address'];
			
			$sql ="UPDATE student
					SET fname='$fname',lname='$lname',faculty='$faculty',roll='$roll',dob='$dob',blood='$blood',address='$address'
					WHERE email='$email';";
					if(mysqli_query($con,$sql)){
				echo"Updated Successfully";
				
			}	
				else
					echo"failed";
		?></center><br><br><br><br>
		<center><a href="home.php">Click here to go to homepage.</a></center>
	</body>
</html>