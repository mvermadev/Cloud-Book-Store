<!DOCTYPE html>
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
	<button><a href="./signin.php">SIGN IN</a></button> 
	</header> <hr>

<!-- SIDE BAR: -->
<nav id="sidenav" class="myside">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style='text-decoration:none; color: white; font-size:50px; font-weight: bold;'>&times;</a>
	<?php echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./index.php style='text-decoration:none; color: white; font-size:20px;'>HOME</a></button>";
	echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./signin.php style='text-decoration:none; color: white; font-size:20px;'>SIGN IN</a></button>";
	?>	
	</nav>	
	<script src="./app.js"></script>

	<form action="../DB/signupdb.php" method="POST">
		<input id="in" type="text" name="name" placeholder="NAME"> <br><br>
		<input id="in" type="email" name="email" placeholder="EMAIL">  <br><br>
		<input id="in" type="password" name="pw" placeholder="PASSWORD"> <br><br> 
	<input id="btn" type="submit" value="SIGN UP" name="submit" style="cursor: pointer;">
	</form>

</body>
</html>
