<?php 
session_start();
if (!isset($_SESSION['email']))
{header('location: login.php');
exit();}
?>
<?php
$con = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($con,'health');
	$email=$_SESSION['email'];
	$query='SELECT s_id FROM student WHERE email="'.$email.'"';
	$mysqli_result = mysqli_query($con, $query);
	$roww=mysqli_fetch_row($mysqli_result);
	$id=$roww[0];
	$sql = "SELECT * FROM med_history WHERE s_id=".$id;
	$result=$con->query($sql);
	if($result->num_rows>0)
	{    echo'<table width="100%" border="1"><tr><td>Appointment ID:</td><td>Doctor:</td><td>Date:</td><td>Problem:</td><td>Admitted?</td><td>Medicine</td><td>Diagnosis:</td></tr>';
			while( $row=$result->fetch_assoc())
			{
        echo "<tr><td>" . $row["appointment_id"]. " </td><td>" . $row["doctor"]. "</td><td>" . $row["date"]. " </td><td>" . $row["problem"]. "</td><td>" . $row["admitted"]. "</td><td>" . $row["medicine"]. "</td><td>" . $row["diagnosis"]. "</td></tr><br>";
    }
				
			}
	?>