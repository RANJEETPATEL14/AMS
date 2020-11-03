<?php
	require_once 'connect.php';
	$password = $_POST['password'];
		$conn->query("UPDATE `student` SET `password` = '$password'  WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "student.php";
			</script>
		';