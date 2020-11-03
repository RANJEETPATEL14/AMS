<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title> Attendance Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
        <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
        <link rel="stylesheet" href="jquery-ui/jquery-ui.structure.css">
        <link rel="stylesheet" href="jquery-ui/jquery-ui.theme.css">
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right"> Attendance Management System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($teacher_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown active">
					<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Web Technology<b class = "caret"></b></a>
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
			
			<div class = "alert alert-info">Home / Web Technology</div>
			<table id = "table" class = "table table-bordered">
				<thead class = "alert-info">
					<tr>
						<th>Sr. No.</th>
						<th>Student ID</th>
						<th>Name</th>
						<th>Attendance</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$q_student = $conn->query("SELECT * FROM student") or die(mysqli_error());
						while($f_student = $q_student->fetch_array()){
					?>
					<tr>
						<td><?php echo $f_student['student_id']?></td>
						<td><?php echo $f_student['username']?></td>
						<td><?php echo $f_student['firstname']?> <?php echo $f_student['lastname']?></td>
						<td> <a class = " estudent_id" name = "<?php echo $f_student['student_id']?>" href = "seeattendance.php">see details</a></td>
					</tr>	
					<?php
						}
					?>
				</tbody>
			</table>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">Attendance Management System</label>
			</div>	
		</div>	
		<br />
		<br />
		<br />
		<br />
		<br />
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script src="jquery.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script>
    $("#dateinput").datepicker();
    </script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rstudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_student.php?student_id=' + $student_id;
				});
			});
			$('.estudent_id').click(function(){
				$student_id = $(this).attr('name');
				$('#edit_query').load('load_edit1.php?student_id=' + $student_id);
			});
		});
	</script>
	
</html>