<?php
	require_once 'connect.php';
	$course = $_POST['course'];
		$conn->query("UPDATE `course` SET `course` = '$course'  WHERE `course_id` = '$_REQUEST[course_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "course.php"; 
			</script>
		';	