<?php
	require_once 'connect.php';
	$q_edit_course = $conn->query("SELECT * FROM `course` WHERE `course_id` = '$_REQUEST[course_id]'") or die(mysqli_error());
	$f_edit_course = $q_edit_course->fetch_array();
?>
<form method = "POST" action = "edit_course_query.php?course_id=<?php echo $f_edit_course['course_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Course Name:</label>
			<input type = "text" name = "course" value = "<?php echo $f_edit_course['course']?>" required = "required" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_course"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	