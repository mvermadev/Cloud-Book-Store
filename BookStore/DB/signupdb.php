<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$conn = mysqli_connect('localhost', 'root', '', 'book');
	if (!$conn) {
		die("Could not create connection ". mysqli_error($conn));
	}
	echo "connection Created. <br>";

	$signValid = "SELECT * FROM bLog WHERE name = '$name' && email = '$email' && pw = '$pw'";
	$r = mysqli_query($conn, $signValid);
	$r = mysqli_num_rows($r);

	if ($r == 1) {
		echo "email or password already exist, Enter Another Email and Password!";
	}
	else{
	$q = "INSERT INTO bLog VALUES('', '$name', '$email', '$pw')";
	mysqli_query($conn, $q);
	echo "inserted";
	}

	mysqli_close($conn);
	header('location:../proj/signin.php');
 ?>