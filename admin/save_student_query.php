<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$conn->query("INSERT INTO `student` VALUES('', '$username','$firstname', '$lastname', '$password')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "student.php";
				</script>
			';
	}	