<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Validation With DB</title>
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
	<?php
		if(isset($_SESSION['errors']))
		{
			foreach ($_SESSION ['errors'] as $error) 
			{
				echo "<p> $error </p>";
			}
		}
		else if(isset($_SESSION['sucess']))
			{
				echo '<p>' . $_SESSION['myemail'] . '</p>' ;
			}
		?>
	<div id = "main">
		<form action ="process.php" method="post">	
			<p><h3>Please enter your email address</h3></p>
			 <p><input type ="text" name= "myemail"></p>
			<p><input type ="submit" value="Submit"></p>
			<p><input type ="hidden" name="action" value="register"></p>

		</form>	
	</div>

</body>
</html>