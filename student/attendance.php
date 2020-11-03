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
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
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
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class ="active"><a href = "attendance.php"><span class = "glyphicon glyphicon-th-list"></span> Attendance Record</a></li>
				</ul>
			<br />
		</div>
		<div class = "col-lg-12" style = "margin-bottom:70px;">
			<?php
			$i=1;
				$q_name1 = $conn->query("SELECT * FROM `course`") or die(mysqli_error());
				while($f_name1 = $q_name1->fetch_array()){
			?>	
			<div class = "alert alert-info"><?php echo $f_name1['course']?></div>
			<table id = "table" class = "table table-bordered">
				<thead class = "alert-success">
					<tr>
						<th>Date</th>
						<th>Attendance</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$q_name = $conn->query("SELECT * FROM `attendence` WHERE student_id ='$_SESSION[student_id]'AND  course_id='$i'") or die(mysqli_error());
					
					while($f_name = $q_name->fetch_array()){
				?>	
					<tr>
						<td><?php echo $f_name['date']?></td>
						<td><?php echo $f_name['att']?></td>
					</tr>
					
				</tbody>
				<?php	}
				?>
			</table>	
			<?php
			$i++;
			}
			?>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning " >
			<div class = "container-fluid">
				<label class = "pull-left">Attendance Management System</label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src="jquery.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script>
    $("#dateinput").datepicker();
    </script>
</html>