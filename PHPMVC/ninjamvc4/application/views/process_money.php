<html>
<head>
	<title>Welcome to Ninja Game</title>
</head>
<body>

<html>
<head>
	<title>Ninja Gold</title>
	<style type="text/css">
		.farm, .Cave, .House, .Casino{
			text-align: center;
			border: 2px solid black;
			width: 200px;
			display: inline-block;
			margin-left: 5px;
		}			
		#comment{
			margin-left: 60px;
			border: solid 1px black;
			width: 700px;
			height: 100px;
			margin-top: 30px;
		}
		
	</style>
</head>
<body>
<p><h4>Your Gold<input type="text>"</h4></p>
<div class ="farm">
		<form action ="/ninja/process_money" method="post">	
				<h4>Farm</h4>
				<p><h5>(earns 10-20 golds)</h5></p>
				<p><input type ="hidden" name="building" value="farm"></p>
				<input type ="submit" value="Find Gold" name='farm'>							
		</form>	
	</div>	
	<div class ="Cave">	
		<form action ="/ninja/process_money" method="post">	
				<h4>Cave</h4>
				<p><h5>(earns 5-10 golds)</h5></p>
				<p><input type ="hidden" name="building" value="Cave"></p>
				<p><input type ="submit" value="Find Gold" name='Cave'></p>			
		</form>	
	</div>
	<div class ="House">
		<form action ="/ninja/process_money" method="post">		
				<h4>House</h4>
				<p><h5>(earns 2-5 golds)</h5></p>
				<p><input type ="hidden" name="building" value="House"></p>
				<p><input type ="submit" value="Find Gold"></p>			
		</form>
	</div>
	<div class ="Casino">
		<form action ="/ninja/process_money" method="post">					
				<h4>Casino!</h4>
				<p><h5>(earns/takes 0-50 golds)</h5></p>
				<p><input type ="hidden" name="building" value="Casino"></p>
				<p><input type ="submit" value="Find Gold"></p>			
		</form>	
	</div>
	<h4>Activities</h4>
		<div id ="comment">
			<p>You went to the and received <?php echo $mynum ?></p? </p>
			
		</div>	
	

</body>
</html>