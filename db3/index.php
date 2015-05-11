<?php
session_start();
if(isset($_SESSION['errors']))
{
	foreach($_SESSION['errors'] as $error)
	{
		echo "<p class = 'error'> {$error} </p>";
	}
	unset($_SESSION['errors']);
}
if(isset($_SESSION['sucess']))
{
	echo "<p class = 'sucess'>{$_SESSION['sucess']} </p>";
	unset($_SESSION['sucess']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration & Login</title>
	<style type="text/css">
		h1, h2, #submit{
			text-align: center;
		}
		#form{
			display: inline-block;
			border: solid 2px black;
			width: 350px;
			height: 300px;
			text-align: left;
			padding-top: 40px;
			padding-left: 20px;
			background-color: yellow;
		}
		#form, #form2{
			display: inline-block;
			vertical-align: top;
			text-align: left;
			padding-left: 50px;
			padding-top: 40px;
			border: solid 2px black;
		}	
	</style>
</head>
<body>
	<div id = "form">
		<form action ="process.php" method="post">
			<h2>Register First Time User</h1>
			<p style = "color:red">email : <input type ="text" name="email"></p>
			<p style = "color:red">first_name : <input type ="text" name="first_name"></p>
			<p style = "color:red">last_name : <input type ="text" name="last_name"></p>
			<p style = "color:red">password : <input type ="password" name="password"></p>
			<p style = "color:red">confirm_password *: <input type ="password" name="confirm_password"></p>
			<input type="hidden" name="action" value="Submit">
			<p><input type ="submit" value="Submit"></p>
		</form>	
	</div>
	<div id = "form2">
		<form action ="process.php" method="post">
			<h2>Login User</h1>
			<p style = "color:red">email : <input type ="text" name="email"></p>
			<p style = "color:red">password : <input type ="password" name="password"></p>
			<input type="hidden" name="register" value="login">
			<p><input type ="submit" value="login"></p>
		</form>	
	</div>

</body>
</html>