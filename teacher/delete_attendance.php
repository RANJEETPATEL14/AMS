<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `attendence` WHERE `att_id` = '$_REQUEST[att_id]'") or die(mysqli_error());
	header('location:attendance.php');