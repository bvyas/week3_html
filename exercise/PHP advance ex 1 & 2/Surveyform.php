<?php
session_start();
if(!isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 1;

}
else
{
	$_SESSION['counter'] = $_SESSION['counter'] + 1;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<style type="text/css">
		h1, h2, #submit{
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
	<div id = "form">
		<form action ="processform.php" method="post">
			Your Name: <input type ="text" name="Your Name">
			<p>Dojo Location: 
			<select name = "location">
				<option value ="Mountain View">Mountain View</option>
				<option value ="Seattle">Seattle</option>
			</select></p>
			<p>Favourite Language:
			<select name = "language">
				<option value ="PHP">PHP</option>
				<option value ="Java Script">Java Script</option>
			</select></p>		
			<p>Comment: <input type ="text" name="Comment"></p>
			<p><input type ="submit" value="Submit"></p>
		</form>	
	</div>

</body>
</html>