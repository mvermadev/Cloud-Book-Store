<?php 
session_start();
	
	if ($_SESSION['name']) {
	$name = $_POST['name'];
	$book = $_POST['book'];
	$fileName = $_FILES['bookf']['name'];
	$tempName = $_FILES['bookf']['tmp_name'];
	$folder = "../proj/bkStore/".$fileName;
	echo $folder;
	move_uploaded_file($tempName, $folder);
	$conn = mysqli_connect('localhost', 'root', '', 'book');
	if (!$conn) {
		die("Could not create connection ". mysqli_error($conn));
	}
	echo "connection Created. <br>";


	$q = "INSERT INTO bstore VALUES('', '$name', '$book', '$folder')";
	$r = mysqli_query($conn, $q);
	if (!$r) {
		die("DATA NOT INSERTED ". mysqli_error($conn));
	} 
	echo "DATA INSERTED.";
	header('location:../proj/index.php');
 }
	header('location:../proj/index.php');

 ?>