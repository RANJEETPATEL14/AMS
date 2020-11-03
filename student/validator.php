<?php
	session_start();
	if(!ISSET($_SESSION['student_id'])){
		header('location: index.php');
	}