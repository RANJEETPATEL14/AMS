<?php
	require_once 'connect.php';
	$q_studentname = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$_SESSION[student_id]'") or die(mysqli_error());
	$f_studentname = $q_studentname->fetch_array();
	$student_name = $f_studentname['firstname']." ".$f_studentname['lastname'];
	$username = $f_studentname['username'];