<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		.Login{
			text-align: left;
			border: 1px solid silver;
			padding-left: 30px;
			width: 300px;
		}
	</style>
</head>
<body>	
	<?php
	if($this->session->flashdata("login_error"))
	{
		echo $this->session->flashdata("login_error");
	}
	?>
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