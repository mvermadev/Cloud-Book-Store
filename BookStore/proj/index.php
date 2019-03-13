<!DOCTYPE html>
<?php session_start();
session_regenerate_id(true);	
	error_reporting(0); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Booker</title>
	<style type="text/css">
	@import url("./styles/header.css");
	@import url("./styles/style.css");
	</style>

</head>
<body style="text-align: center;">
	
	<header>
	
	<span style="cursor: pointer; font-size: 26px; font-weight: bold;" onclick="openNav()">&#9776;</span>	
	<h1><u>Store your book to load anywhere.</u></h1> 
	<div id="hbtn">
	
	<?php if (!$_SESSION['name']) {
		echo "<button><a href=./signin.php>SIGN IN</a></button>";
	}
	else{
		echo "<button><a href=./file.php>BOOKS</a></button>";
		echo "<button><a href=./lgout.php>LOGOUT</a></button>";
		echo "<button>".strtoupper($_SESSION['name'])."</button>";

	} 
	?>		
	</div> 
	</header> <hr>
<nav id="sidenav" class="myside">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style='text-decoration:none; color: white; font-size:50px; font-weight: bold;'>&times;</a>
	<?php if (!$_SESSION['name']) {
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./signin.php style='text-decoration:none; color: white; font-size:20px;'>SIGN IN</a></button>";
	}
	else{
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./file.php style='text-decoration:none; color: white; font-size:20px;'>BOOKS</a></button>";
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./lgout.php style='text-decoration:none; color: white; font-size:20px;'>LOGOUT</a></button>";
		echo "<button style='text-decoration:none; color: white; background-color: green; border:none; padding: 10px 30px; font-size:20px;  '>".strtoupper($_SESSION['name'])."</button>";
	} 
	?>	
	</nav>	
	<script src="./app.js"></script>
	<form action="../DB/store.php" method="POST" enctype="multipart/form-data">
		<input id="in" type="text" name="name" id="name" placeholder="ENTER FULL NAME" required>  <br><br>
		<input id="in" type="text" name="book" id="book" placeholder="ENTER BOOK NAME" required> <br><br> 
		<input id="in" type="file" name="bookf" id="bookf" required>  <br><br>
		<input id="btn" type="submit" value="SUBMIT" name="submit">
	</form>
	
<!-- in- 8381a942813c9c474222074be11750e2 -->

	<!-- fc148443675308ecb1532a2cac21bd8d -->
<!--sess_fc148443675308ecb1532a2cac21bd8d -->

</body>
</html>