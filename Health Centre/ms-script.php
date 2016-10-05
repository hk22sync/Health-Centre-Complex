<?php
	$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$app_id=$_POST['app_id'];
	$query= "SELECT medicine FROM med_history WHERE appointment_id=".$app_id;
	$result = mysqli_query($con,$query);
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($num == 0)
		{
		
		header('location: med_store.php');}
		
	else
	{
		echo $row[0];
	}
	?>