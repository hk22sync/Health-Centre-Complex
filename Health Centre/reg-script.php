<html>
<body>
<center>
<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');

	$fname = $_POST['fname'];
	$fname = mysqli_real_escape_string($con,$fname);
	$fname = strip_tags($fname);
	
	$lname = $_POST['lname'];
	$lname = mysqli_real_escape_string($con,$lname);
	$lname = strip_tags($lname);
	
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con,$email);
	$email = strip_tags($email);
	
	$faculty= $_POST['faculty'];
	
	$roll = $_POST['roll'];
	$roll = mysqli_real_escape_string($con,$roll);
	$roll = strip_tags($roll);
	
	$dob= $_POST['dob'];
	
	$blood= $_POST['blood'];
	
	$gender= $_POST['gender'];
	
	$contact = $_POST['contact'];
	$contact = mysqli_real_escape_string($con,$contact);
	$contact = strip_tags($contact);

	$address = $_POST['address'];
	$address = mysqli_real_escape_string($con,$address);
	$address = strip_tags($address);
	
	$p = rand(100,9999999);
	$password = $p;
	$password = MD5($password);
	
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$regex_num = "/^[789][0-9]{9}$/";
	$query = "SELECT * FROM student WHERE email='$email'";
	$result = mysqli_query($con,$query);
	$num = mysqli_num_rows($result);
	
	

	if ($num != 0)
		{
		$m = "<span style='color:red;'>Email Already Exists</span>";
		header('location: registration.php?m1='.$m);
		}
	else if (!preg_match($regex_email, $email))
		{
		$m = "<span style='color: red;'>Not a valid Email Id</span>";
		header('location: registration.php?m1='.$m);
		}
	else if (!preg_match($regex_num, $contact))
		{
		$m = "<span style='color: red;'>Not a valid phone number</span>";
		header('location: registration.php?m2='.$m);
		}
	else
		{
		$query = "INSERT INTO student
		(fname, lname, email, faculty, roll, dob, blood, gender, contact, address, password)
		VALUES
		('$fname','$lname','$email','$faculty','$roll','$dob','$blood','$gender','$contact','$address','$password')";
		if(mysqli_query($con,$query)){
		$lastid=mysqli_insert_id($con);
		echo "Your Health Diary number is : ".$lastid;echo "<br>";
		
		
		}
		
		}
?>
</center>
<center>
<a href="home.php">Click here to go to home</a>
</center>
</body>
</html>