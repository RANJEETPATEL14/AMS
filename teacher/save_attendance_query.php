<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
        $data = $_POST;
        $count = count($_POST['student_id']);
		for($i=0;$i < $count; $i++){
		$date1 = $_POST['date'];
		$course1 = $_POST['course'];
		$conn->query("INSERT INTO `attendence` VALUES(' ', '$date1', '$course1', '{$_POST['student_id'][$i]}', '{$_POST['username'][$i]}', '{$_POST['att'][$i]}' )") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					window.location = "home.php";
				</script>
			';
		}
	}	