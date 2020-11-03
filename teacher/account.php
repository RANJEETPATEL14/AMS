<?php
	require_once 'connect.php';
	$q_teachername = $conn->query("SELECT * FROM `teacher` WHERE `teacher_id` = '$_SESSION[teacher_id]'") or die(mysqli_error());
	$f_teachername = $q_teachername->fetch_array();
	$teacher_name = $f_teachername['firstname']." ".$f_teachername['lastname'];