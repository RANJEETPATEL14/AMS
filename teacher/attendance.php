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
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($teacher_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>

		<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
			<div class = "modal-dialog" role = "document">
				<div class = "modal-content ">
					<div class = "modal-body">
						<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
						<br />
						<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
					</div>
				</div>
			</div>
		</div>

		<div class = "modal fade" id = "edit_attendance" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
			<div class = "modal-dialog" role = "document">
				<div class = "modal-content panel-warning">
					<div class = "modal-header panel-heading">
						<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
						<h4 class = "modal-title" id = "myModallabel">Attendance</h4>
					</div>
					<div id = "edit_query"></div>
				</div>
			</div>
		</div>

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
						<th>Student ID</th>
						<th>Date</th>
						<th>Attendance</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$q_name = $conn->query("SELECT * FROM `attendence` WHERE course_id='$i'") or die(mysqli_error());
					
					while($f_name = $q_name->fetch_array()){
				?>	
					<tr>
						<td><?php echo $f_name['username']?></td>
						<td><?php echo $f_name['date']?></td>
						<td><?php echo $f_name['att']?></td>
						<td><a class = "btn btn-danger ratt_id" name = "<?php echo $f_name['att_id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> <a class = "btn btn-warning  eatt_id" name = "<?php echo $f_name['att_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_attendance"><span class = "glyphicon glyphicon-edit"></span></a></td>
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
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.ratt_id').click(function(){
				$att_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_attendance.php?att_id=' + $att_id;
				});
			});
			$('.eatt_id').click(function(){
				$att_id = $(this).attr('name');
				$('#edit_query').load('load_edit1.php?att_id=' + $att_id);
			});
		});
	</script>
</html>