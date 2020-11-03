<?php
	session_start();
	if(!ISSET($_SESSION['teacher_id'])){
		header('location: index.php');
	}