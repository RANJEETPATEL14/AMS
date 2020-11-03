<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_student_query.php?student_id=<?php echo $f_edit_student['student_id']?>" enctype = "multipart/form-data">
<div class  = "modal-body">
        <div class = "form-group">
			<label>Student ID:</label>
			<span><?php echo $f_edit_student['username']?></span>
		</div>
        <div class = "form-group">
			<label>First Name:</label>
			<span><?php echo $f_edit_student['firstname']?></span>
		</div>
        <div class = "form-group">
			<label>Last Name:</label>
			<span><?php echo $f_edit_student['lastname']?></span>
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "password" required = "required" value = "<?php echo $f_edit_student['password']?>" name = "password" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	