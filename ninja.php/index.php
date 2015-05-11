<?php
session_start();
if(!isset($_SESSION['gold'])){
	$_SESSION['gold'] = 0;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ninja Gold</title>
	<style type="text/css">
		#farm, #Cave, #House, #Casino{
			text-align: center;
			border: 2px solid black;
			width: 200px;
			display: inline-block;
			margin-left: 20px;
		}
		#form{
			display: inline;
			border: solid 2px black;
			width: 500px;
			height: 250px;
			text-align: center;
			padding-top: 40px;
			margin-left: 10px;
			display: inline-block;
		}	
		#comment{
			margin-left: 20px;
		}
		.main{
			width: 950px;
			height: 600px;
			border: solid 2px black;
			display: inline-block;

		}
	</style>
</head>
<body>
<div class ="main">
		<form class ="farm" action ="process.php" method="post">	
			<p>Your Gold :<?php echo $_SESSION['gold']; ?></p>
			<div id ="farm">
				<h4>Farm</h4>
				<p><h5>(earns 10-20 golds)</h5></p>
				<p><input type ="hidden" name="building" value="farm"></p>
				<?php $_SESSION['farm'] = rand(10, 20); ?>
				<input type ="submit" value="Find Gold" name='farm'>	
			</div>
		</form>			
		<form action ="process.php" method="post">	
			<div id ="Cave">
				<h4>Cave</h4>
				<p><h5>(earns 5-10 golds)</h5></p>
				<p><input type ="hidden" name="building" value="Cave"></p>
				<?php $_SESSION['Cave'] = rand(5, 10); ?>
				<p><input type ="submit" value="Find Gold" name='Cave'></p>
			</div>
		</form>	
		<form action ="process.php" method="post">	
			<div id ="House">
				<h4>House</h4>
				<p><h5>(earns 2-5 golds)</h5></p>
				<p><input type ="hidden" name="building" value="House"></p>
				<?php $_SESSION['House'] = rand(2, 5); ?>
				<p><input type ="submit" value="Find Gold"></p>
			</div>
		</form>
		<form action ="process.php" method="post">		
			<div id ="Casino">
				<h4>Casino!</h4>
				<p><h5>(earns/takes 0-50 golds)</h5></p>
				<p><input type ="hidden" name="building" value="Casino"></p>
				<?php $_SESSION['Casino'] = rand(-50, 50); ?>
				<p><input type ="submit" value="Find Gold"></p>	
			</div>
		</form>	
		<div id ="comment">
			<h6>Activities</h6>
			<p>You entered a f
		</div>	
	</div>	
		
	

</body>
</html>