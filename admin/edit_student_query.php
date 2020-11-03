<?php
	require_once 'connect.php';
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
		$conn->query("UPDATE `student` SET `username` = '$username', `firstname` = '$firstname', `lastname` = '$lastname', `password` = '$password'  WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "student.php"; 
			</script>
		';	