<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con,$email);
	$email = strip_tags($email);

	$password = $_POST['password'];
	$password = mysqli_real_escape_string($con,$password);
	$password = strip_tags($password);
	$password = MD5($password);

	$query = "SELECT email, password FROM student WHERE email='$email'";
	$result = mysqli_query($con,$query);
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($num == 0)
		{
		$m = "<span style='color: red'>Email Doesn't Exist</span>";
		header('location: login.php?ml1='.$m);
		}
	else
		if ($password == $row['password'])
			{
			session_start();
			$_SESSION['email']=$row['email'];
			header('location: student_choice.php');		
			}
		else
			{
			$m = "<span style='color: red'>Incorrect Password</span>";
			header('location: login.php?ml2='.$m);
			}



?>