<?php
	require_once 'connect.php';
	$q_edit_att = $conn->query("SELECT * FROM `attendence` WHERE `att_id` = '$_REQUEST[att_id]'") or die(mysqli_error());
	$f_edit_att = $q_edit_att->fetch_array();
?>
<form method = "POST" action = "edit_attendance_query.php?att_id=<?php echo $f_edit_att['att_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
	<div class = "form-group">
			<label>Subject:</label>
			<span><?php echo $f_edit_att['course_id']?></span>
		</div>
        <div class = "form-group">
			<label>Student ID:</label>
			<span><?php echo $f_edit_att['username']?></span>
		</div>
        <div class = "form-group">
			<label>Date:</label>
			<span><?php echo $f_edit_att['date']?></span>
		</div>
		<div class = "form-group">
			<label>att:</label>
			<input type = "att" required = "required" value = "<?php echo $f_edit_att['att']?>" name = "att" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	