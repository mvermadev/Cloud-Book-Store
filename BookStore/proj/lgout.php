<?php 
	
	session_start();
	session_destroy();
	session_unset($_SESSION['name']);	
	header('location:./index.php');

 ?>