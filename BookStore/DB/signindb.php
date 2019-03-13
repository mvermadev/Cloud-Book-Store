<?php 
	
	session_start();

	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$conn = mysqli_connect('localhost', 'root', '', 'book');
	if (!$conn) {
		die("Could not create connection ". mysqli_error($conn));
	}
	echo "connection Created. <br>";

	$signValid = "SELECT * FROM bLog WHERE email = '$email' && pw = '$pw'";
	$r = mysqli_query($conn, $signValid);
	$r = mysqli_num_rows($r);
	if ($r == 1) {
		$n = "SELECT name FROM bLog where email = '$email'";
		$qy = mysqli_query($conn, $n);
		$rowName = mysqli_fetch_row($qy);
		$_SESSION['name'] = $rowName[0];
		header('location:../proj/index.php');
	}
	else{
		header('location:../proj/signin.php');
	}

	mysqli_close($conn);
 ?>

 ?>