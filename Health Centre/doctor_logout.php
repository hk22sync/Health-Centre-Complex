<?php
session_start();
if (!isset($_SESSION['d_id']))
	header('location: doctor_login.php');
session_destroy();
header('location: home.php');
?>