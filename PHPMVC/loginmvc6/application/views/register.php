<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		.Registration, .Login{
			text-align: left;
			border: 1px solid silver;
			padding-left: 30px;
			width: 300px;
			margin-top: 30px;
			margin-left: 30px;			
		}
		.Registration h6{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class ="Registration">
		<h4>Wecome to the Registration Home Page</h4>
		<form acton = "/Students/index" method="post">
			First Name  <input type ="text" value" ">
			<p>Last Name <input type ="text" value" "></p>
			<p>Email Address <input type ="text" value" "></p>
			<p>Password <input type ="password" value" "></p>
			<p>Confirm Password <input type ="password" value" "></p>
			<p><h6><button type="submit" value="Register">Register</button><h6></p>
		</form>
	
	</div>	
	<div class="Login">
		<form action = "Students/login" method="post">
			<h4>Registed user Login</h4>
			<p>Email: <input type="text" value" "></p>
			<p>Password: <input type="password" value" "></p>
			<p><input type="submit" value="Login"></p>
		</form>
	</div>	


</body>
</html>