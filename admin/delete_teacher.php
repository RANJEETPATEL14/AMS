<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `teacher` WHERE `teacher_id` = '$_REQUEST[teacher_id]'") or die(mysqli_error());
	header('location:teacher.php');