<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	
	
	$query = "SELECT d_id,contact, dpassword FROM doctor WHERE contact='$contact'";
	$result = mysqli_query($con,$query);
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($num == 0)
		{
		$m = "<span style='color: red'>Doesn't Exist</span>";
		header('location: doctor_login.php?ml1='.$m);
		}
	else
		if ($password == $row['dpassword'])
			{
			session_start();
			$_SESSION['d_id']=$row['d_id'];
			header('location: doctorhome.php');		
			}
		else
			{
			$m = "<span style='color: red'>Incorrect Password</span>";
			header('location: login.php?ml2='.$m);
			}



?>