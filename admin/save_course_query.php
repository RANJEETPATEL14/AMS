<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$course = $_POST['course'];
		$conn->query("INSERT INTO `course` VALUES('', '$course')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "course.php";
				</script>
			';
	}	