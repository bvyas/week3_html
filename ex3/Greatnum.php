<?php
session_start();
if(!isset($_SESSION['num_rand']))
{
	$_SESSION['num_rand'] = rand(1,100);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game For Numbers</title>
	<style type="text/css">
		h1, h2, #main{
			text-align: center;
		}
		#submit{
			color: blue;
		}
		#form{
			display: inline-block;
			border: solid 1px black;
			width: 500px;
			height: 250px;
			text-align: center;
			padding-top: 40px;
		}	
	</style>
</head>
<body>

	<div id = "main">
		<form action ="processgame.php" method="post">
			<h2>Welcome to the Great Number Game!</h2>
			<p><h4>I am thinking of a number between 1 and 100</h4></p>
			<p>Take a guess</p>		
			 <p><input type ="text" name= "myvalue"></p>
			<p><input type ="submit" value="Submit"></p>
		</form>	
	</div>

</body>
</html>