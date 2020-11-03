<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$password = $_POST['password'];
		$conn->query("INSERT INTO `teacher` VALUES('', '$username','$firstname', '$lastname', '$course', '$password')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "teacher.php";
				</script>
			';
	}	