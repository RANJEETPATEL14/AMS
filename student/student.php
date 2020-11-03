<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Attendance Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right">Attendance Management System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($student_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href = "attendance.php"><span class = "glyphicon glyphicon-th-list"></span> Attendance Record</a></li>
				</ul>
			<br />
			<div class = "well col-lg-12">
				<img src = "images/logo.png" />
			<br />
			<br />
			<br />
			</div>
			<div class = "modal fade" id = "edit_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Change Password</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "alert alert-info">Profile</div>
			<div class = "well col-lg-12">
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info">
						    <th>Student ID</th>
							<th>Name</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_student = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$_SESSION[student_id]'") or die(mysqli_error());
						while($f_student = $q_student->fetch_array()){
					?>	
						<tr>
							<td><?php echo $f_student['username']?></td>
							<td><?php echo $f_student['firstname']?> <?php echo $f_student['lastname']?></td>
							<td><?php echo $f_student['password']?></td>
							<td> <a class = "btn btn-warning  estudent_id" name = "<?php echo $f_student['student_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_student"><span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			<br />
			<br />	
			<br />		
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">Attendance Management System </label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.estudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?student_id=' + $student_id);
			});
		});
	</script>
	
</html>