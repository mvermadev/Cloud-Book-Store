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
	echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./signup.php style='text-decoration:none; color: white; font-size:20px;'>SIGN UP</a></button>";
	?>	
	</nav>	
	<script src="./app.js"></script>

	<form action="../DB/signindb.php" method="POST">
		<input id="in" type="email" name="email" placeholder="EMAIL">  <br><br>
		<input id="in" type="password" name="pw" placeholder="PASSWORD"> <br><br> 
		<input id="btn" type="submit" value="SIGN IN" name="submit" style="cursor: pointer;">
	</form>
	<h2>I want to <a href="./signup.php" style="color: dodgerblue"> SIGNUP.</a></h2>

</body>
</html>
<!-- 

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
		echo "<button><a href=./signin.php style='text-decoration:none; color: white'>SIGN IN</a></button>";
	}
	else{
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./file.php style='text-decoration:none; color: white; font-size:20px;'>BOOKS</a></button>";
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./lgout.php style='text-decoration:none; color: white; font-size:20px;'>LOGOUT</a></button>";
		echo "<button style='text-decoration:none; color: white; background-color: green; border:none; padding: 10px 30px; font-size:20px;  '>".strtoupper($_SESSION['name'])."</button>";
	} 
	?>	
	</nav>	
	<script src="./app.js"></script>

 -->