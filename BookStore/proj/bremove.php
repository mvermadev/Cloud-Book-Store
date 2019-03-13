<?php 

	session_start();
	
	$bn = $_GET['bn'];
	$fn = $_GET['fn'];
	$conn = mysqli_connect('localhost', 'root', '', 'book');
	if (!$conn) {
		die("Could not create connection ". mysqli_error($conn));
	}
	echo "connection Created. <br>";

	$q = "DELETE from bstore WHERE bookName = '$bn' && file = '$fn'";
	$r = mysqli_query($conn, $q);
	$rfn = ltrim($fn, "./proj");
	unlink("./".$rfn);
	if (!$r) {
		die("Could not delete ".mysqli_error($conn));
	}
	header('location:file.php');

 ?>