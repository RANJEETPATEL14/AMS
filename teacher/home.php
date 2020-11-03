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
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><?php echo htmlentities($teacher_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "teacher.php"><i class = "glyphicon glyphicon-user"></i>Update Profile</a></li>
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class ="active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href = "attendance.php"><span class = "glyphicon glyphicon-th-list"></span> Attendance Record</a></li>
			</ul>
			<div class = "well col-lg-12">
				<img src = "images/logo.png" />
			<br />
			<br />
			<br />
			</div>
		</div>
		<h1 align ="center">Hi, <?php echo htmlentities($teacher_name)?> welcome to your portal.</h1>
        <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true"></span></button>
							<h4 class = "modal-title" id = "myModallabel">Add Attendance</h4>
						</div>
						<form method = "POST" action = "save_attendance_query.php" enctype = "multipart/form-data">
                            
							<div class  = "modal-body">
                                <br />
								<div id="mydiv">
									<label>Choose the Date:</label>
									<input id="dateinput" name="date" placeholder="click to select date" type="text">
								</div>
								<div>
								<label>Choose the Course:</label>
									<select name = "course" required = "required" class = "form-control">
									<?php
										$q_name = $conn->query("SELECT * FROM `course`") or die(mysqli_error());
										
										while($f_name = $q_name->fetch_array()){
									?>							
										<option><?php echo $f_name['course_id']?> <?php echo $f_name['course']?></option>
									<?php
										}
									?>
									</select>
								</div>
								<br />
                                <table id = "table" class = "table table-bordered ">
                                    <thead>
                                        <tr class = "alert-info">
                                            <th>Sr. No.</th>
											<th>Student Id</th>
                                            <th>Name</th>
                                            <th>Attendence</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $q_student = $conn->query("SELECT * FROM `student`") or die(mysqli_error());
                                        while($f_student = $q_student->fetch_array()){
                                    ?>	
                                        <tr>
											<td>
												<div>
													<select name = "student_id[]">
													<option><?php echo $f_student['student_id']?></option>
													</select>
												</div>
                                            </td>
											<td>
												<div>
													<select name = "username[]">
													<option><?php echo $f_student['username']?></option>
													</select>
												</div>
                                            </td>
											
											<td><?php echo $f_student['firstname']?> <?php echo htmlentities($f_student['lastname'])?></td>
                                            <td>
												<div>
													<select name = "att[]" class = "form-control">
													<option>0</option>
													<option>1</option>
													</select>
												</div>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span>Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class = "alert alert-info">Home / Web Technology</div>
			<div class = "well col-lg-12">
				<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add Attendance</button>
            </div>
            </div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
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