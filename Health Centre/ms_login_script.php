<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$ms_id = $_POST['ms_id'];
	$pass = $_POST['pass'];
	
	
	$query = "SELECT ms_id,pass FROM med WHERE ms_id='$ms_id'";
	$result = mysqli_query($con,$query);
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($num == 0)
		{
		
		header('location: ms_login.php?');
		}
	else
		if ($pass == $row['pass'])
			{
			session_start();
			$_SESSION['ms_id']=$row['ms_id'];
			header('location: med_store.php');		
			}
		else
			{
			
			header('location: ms_login.php?');
			}



?>