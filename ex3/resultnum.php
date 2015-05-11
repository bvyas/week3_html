<?php
session_start();
?>
<html>
<head>
	<title>Game For Numbers</title>
	<style type="text/css">
		#result{
			text-align: center;
			border: 1px solid black;
			width: 500px;
			height: 400px;
		}	
		#result h3{
			border: 1px solid black;
			background-color: green;
			width: 200px;
			height: 150px;
			display: inline-block;
		}
	</style>
</head>
<body>
	<div id ="result">
			<p><h2>Welcome to the Great Number Game!</h2></p>
			<p><h4>I am thinking of a number between 1 and 100</h4></p>
			<p>Take a guess</p>	
			<p><h3><?php echo $_SESSION['num_rand']. " " ;?> was the number.</h3></p>
		
	</div>
</body>
</html>		





