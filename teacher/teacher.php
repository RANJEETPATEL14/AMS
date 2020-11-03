<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Attendance Management System </title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right">Attendance Management System </p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><?php echo htmlentities($teacher_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class="active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Attendance Record<b class = "caret"></b></a>
					<ul class = "dropdown-menu">
						<li><a href = "wt.php">Web Technology</a></li>
						<li><a href = "coa.php">CO&A</a></li>
						<li><a href = "dbms.php">DBMS</a></li>
						<li><a href = "ss.php">System Software</a></li>
					</ul>
				</li>
				</ul>
			<br />
			<div class = "well col-lg-12">
				<img src = "images/logo.png" />
			<br />
			<br />
			<br />
			</div>
		</div>
			<div class = "modal fade" id = "edit_teacher" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
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
								<th>Teacher ID</th>
								<th>Name</th>
								<th>Course</th>
								<th>Password</th>
								<th>Change Password</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$q_teacher = $conn->query("SELECT * FROM `teacher` WHERE `teacher_id` = '$_SESSION[teacher_id]'") or die(mysqli_error());
							while($f_teacher = $q_teacher->fetch_array()){
						?>	
							<tr>
								<td><?php echo $f_teacher['username']?></td>
								<td><?php echo $f_teacher['firstname']?> <?php echo $f_teacher['lastname']?></td>
								<td><?php echo $f_teacher['course']?></td>
								<td><?php echo $f_teacher['password']?></td>
								<td> <a class = "btn btn-warning  eteacher_id" name = "<?php echo $f_teacher['teacher_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_teacher"><span class = "glyphicon glyphicon-edit"></span></a></td>
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
			$('.eteacher_id').click(function(){
				$teacher_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?teacher_id=' + $teacher_id);
			});
		});
	</script>
</html>