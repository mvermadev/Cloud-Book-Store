<!DOCTYPE html>
<?php 
	error_reporting(0);
	session_start(); 

	?>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Booker</title>
	<style type="text/css">
	@import url("./styles/header.css");
	@import url("./styles/style.css");

	#books {
		display: flex;
	}
	#books #b{
		display: flex;
		/*justify-content: column;*/
	}
	
	#books  #bo{
		/*transform: translate(-90px,110px);*/
	}
	#books #bo button{
		border: none;
		background-color: #ea4f4f;
		padding: 8px;
		border-radius: 8px;
		color: white;
		font-weight: bold;
		/*display: none;*/
		/*transition-duration: 0.5s;*/
		/*opacity: 1;*/
	}

	</style>

</head>
<body>
	<header>
	
	<span style="cursor: pointer; font-size: 26px; font-weight: bold;" onclick="openNav()">&#9776;</span>	
	<h1><u>Store your book to load anywhere.</u></h1> 
	<div id="hbtn">
	
	<?php if (!$_SESSION['name']) {
		echo "<button><a href=./signin.php>SIGN IN</a></button>";
	}
	else{
		echo "<button><a href=./index.php>HOME</a></button>";
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
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./index.php style='text-decoration:none; color: white; font-size:20px;'>HOME</a></button>";
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./file.php style='text-decoration:none; color: white; font-size:20px;'>BOOKS</a></button>";
		echo "<button style=' background-color: green; border:none; padding: 10px 30px;' ><a href=./lgout.php style='text-decoration:none; color: white; font-size:20px;'>LOGOUT</a></button>";
		echo "<button style='text-decoration:none; color: white; background-color: green; border:none; padding: 10px 30px; font-size:20px;  '>".strtoupper($_SESSION['name'])."</button>";
	} 
	?>	
	</nav>	
	<script src="./app.js"></script>
	
	<?php 

	$conn = mysqli_connect('localhost', 'root', '', 'book');
	if (!$conn) {
		die("Could not create connection ". mysqli_error($conn));
	}
	
	$q = "SELECT * from bstore WHERE name = '$_SESSION[name]'";
	$r = mysqli_query($conn, $q);
	if (!$r) {
			die("could not get data".mysqli_error($conn));
		}	

	while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
	 ?>

	<div id="books">
		<!-- <div id="b" onmouseover="show()" onmouseout="not()"> -->
				
			<?php echo "<div id='b' onmouseover='show()' onmouseout='not()' style='display:flex; flex-wrap: wrap; align-items: center; background-color: #dee9f7; border-radius: 8px;
		padding: 20px;
		text-align: center; margin: 10px;'><section><img src='./img/book.png' alt='' style='	width: 100px; height: 100px;
'><h3 style='padding:10px'><a href=./".$row['file']." style='text-decoration:none; color: #075e25;' download>".$row['bookName']." </a></h3><div id='bo' >
			 <button style='width: 100%;'><a href='./bremove.php?bn=$row[bookName]&fn=$row[file]' style='color: white;'>"."REMOVE"."</a></button>
			</div></div></section>";  
 } ?>
		
	</div>
	
	<!-- <script>
		var bo = document.getElementById('bo');
				bo.style.display = "none";
			function show(){
				var bo = document.getElementById('bo');
				var b = document.getElementById('b');
				bo.style.display = "block";
				// b.style.opacity = "0.6";
			
			}
			function not(){
				var bo = document.getElementById('bo');
				var b = document.getElementById('b');
				bo.style.display = "none";
			}
	</script> -->
	
</body>
</html>
<!-- ltrim($row['file'],"bkStore/") -->
	