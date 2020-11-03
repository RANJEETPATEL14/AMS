<?php
	require_once 'connect.php';
	$password = $_POST['password'];
		$conn->query("UPDATE `teacher` SET `password` = '$password'  WHERE `teacher_id` = '$_REQUEST[teacher_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "teacher.php";
			</script>
		';