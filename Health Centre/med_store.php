<?php 
session_start();
if (!isset($_SESSION['ms_id']))
	header('location: ms_login.php');

?>
<html>
<body><br><br><br><br><br>
<center>
<div style="background-color: #A4A4A4;width: 200px; height:80px;padding-right: 20px; border-radius:5px;">

<form action="ms-script.php" method="post">
	<table>
	<tr>
	<td>Enter Appointment ID:</td> 
	</tr>
	<tr>
	<td><input type="text" name="app_id" required="true" style = "height:25px; padding-left:10px;border-radius:5px;"></td> 
	</tr>
	<tr>
	
	<td><input type="submit" value="Submit"></td> 
	</tr>
	</table>
</form>

</div>
</center>

	
</body>
</html>
