<html>
<head>
	<title>Random Number</title>
	<style type="text/css">
		#num p, h4{
			text-align: center;
		}

	</style>
</head>
<body>
	<div id ="num">
		<form action="random/num" method="post">
			<p><h4>Random Word (attempt #<?= $counter; ?>)</p></h4>
			<p><button type ="submit" value = "Generate">Generate</button></p>
		</form>
	</div>	

</body>
</html>