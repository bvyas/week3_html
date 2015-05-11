<?php
session_start();
if(isset($_SESSION['errors']))
{
	foreach($_SESSION['errors'] as $error)
	{
		echo "<p> $error </p>";
	}
	unset($_SESSION['errors']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		h1, h2, #submit{
			text-align: center;
		}
		#form{
			display: inline-block;
			border: solid 1px black;
			width: 350px;
			height: 300px;
			text-align: left;
			padding-top: 40px;
			padding-left: 20px;
		}	
	</style>
</head>
<body>
	<div id = "form">
		<form action ="process.php" method="post">
			* Required field.
			<p style = "color:red">email *: <input type ="text" name="email"></p>
			<p style = "color:red">first_name *: <input type ="text" name="first_name"></p>
			<p style = "color:red">last_name *: <input type ="text" name="last_name"></p>
			<p style = "color:red">password *: <input type ="password" name="password"></p>
			<p style = "color:red">confirm_password *: <input type ="password" name="confirm_password"></p>
			<p>birth_date: <input type =text("y-m-d") name="birth_date"></p>
			<p>profile_picture: <input type ="text" name="profile_picture"></p>
			<input type="hidden" name="action" value="Submit">
			<p><input type ="submit" value="Submit"></p>
		</form>	
	</div>

</body>
</html>