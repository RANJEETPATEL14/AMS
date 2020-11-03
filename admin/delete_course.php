<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `course` WHERE `course_id` = '$_REQUEST[course_id]'") or die(mysqli_error());
	header('location:course.php');