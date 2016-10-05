<html>
<body>

<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');

	$dfname = $_POST['dfname'];
	
	
	$dlname = $_POST['dlname'];
	
	
	$contact = $_POST['contact'];
	
	
	
	
	$qualification = $_POST['qualification'];
	
	
	$designation= $_POST['designation'];
	
	$p = rand(100,9999999);
	$dpassword = $p;
	$dpassword = MD5($dpassword);
	
	
	$query = "SELECT * FROM doctor WHERE contact='$contact'";
	$result = mysqli_query($con,$query);
	$num = mysqli_num_rows($result);
	
	

	if ($num != 0)
		{
		$m = "<span style='color:red;'>Number Already Exists</span>";
		header('location: add_doctor.php?m1='.$m);
		}
	
	else
		{
		$query = "INSERT INTO doctor
		(dfname, dlname, contact, qualification, designation, dpassword)
		VALUES
		('$dfname','$dlname','$contact','$qualification','$designation','$dpassword')";
		mysqli_query($con,$query);
		echo"$p";
		
		
		
		}
		
		
?>
