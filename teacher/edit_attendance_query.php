<?php
	require_once 'connect.php';
	$att = $_POST['att'];
		$conn->query("UPDATE `attendence` SET `att` = '$att'  WHERE `att_id` = '$_REQUEST[att_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "attendance.php";
			</script>
		';