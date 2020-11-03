<?php
	require_once 'connect.php';
	$q_edit_teacher = $conn->query("SELECT * FROM `teacher` WHERE `teacher_id` = '$_REQUEST[teacher_id]'") or die(mysqli_error());
	$f_edit_teacher = $q_edit_teacher->fetch_array();
?>
<form method = "POST" action = "edit_teacher_query.php?teacher_id=<?php echo $f_edit_teacher['teacher_id']?>" enctype = "multipart/form-data">
<div class  = "modal-body">
        <div class = "form-group">
			<label>Teacher ID:</label>
			<span><?php echo $f_edit_teacher['username']?></span>
		</div>
        <div class = "form-group">
			<label>First Name:</label>
			<span><?php echo $f_edit_teacher['firstname']?></span>
		</div>
        <div class = "form-group">
			<label>Last Name:</label>
			<span><?php echo $f_edit_teacher['lastname']?></span>
		</div>
		<div class = "form-group">
			<label>Course:</label>
			<span><?php echo $f_edit_teacher['course']?></span>
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_teacher['password']?>" name = "password" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	