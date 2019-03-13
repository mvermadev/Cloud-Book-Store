<?php 
	
	//CREATE DB:	
	// $conn = mysqli_connect('localhost', 'root', '');
	// if (!$conn) {
	// 	die("Could not create connection ". mysqli_error($conn));
	// }
	// echo "connection Created.";

	// $q = "CREATE DATABASE book";
	// $r = mysqli_query($conn, $q);
	// if (!$r) {
	// 	die("Could not create database ". mysqli_error($conn));
	// }
	// 	echo "DB Created.";

	//CREATE TABLE:

	$conn = mysqli_connect('localhost', 'root', '', 'book');
	if (!$conn) {
		die("Could not create connection ". mysqli_error($conn));
	}
	echo "connection Created. <br>";

	$q = "CREATE TABlE bLog(
			Id int auto_increment primary key,
			name varchar(20) not null,
			email varchar(40) not null,
			pw varchar(50) not null
		)";
		
	$r = mysqli_query($conn, $q);
	if (!$r) {
		die("not create table".  mysqli_error($conn));
	}
	echo "create table";
 ?>