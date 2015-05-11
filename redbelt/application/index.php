<html>
<head>
	<title>Hello Friends</title>
	<style type="text/css">
	.Register{
			border: 1px solid black;
			width: 330px;
			height: 300px;
			text-align: left;
			padding-left: 20px;
			display: inline-block;
			vertical-align: top;
		}
		.Login{
			border: 1px solid black;
			width: 250px;
			height: 180px;
			text-align: left;
			padding-left: 20px;
			display: inline-block;
			vertical-align: top;
		}		
	</style>
</head>
<body>
	<?php if ($this->session->flashdata("login_error") != NULL ){
		echo $this->session->flashdata("login_error");
	} ?>

	<?php if ($this->session->flashdata("Registration_error") != NULL ){
		echo $this->session->flashdata("Registration_error");
	} ?>
	<h3>Welcome!</h3>	
	<div class="Register">
		<h4>Register</h4>
	<form action='/books/signup_validation' method='post'>
		 Name<input type="text" name="name"><br>
		<br>Alias<input type="text" name="alias"><br>
		<br>Email<input type="text" name="email"><br>
		<br>Password<input type="password" name="password">
		<h6>*Password should be at least 8 characters</h6>
		<br>CPassword<input type="password" name="cpassword">
		<input type ="submit" value="Register">
		<input type="hidden" value="submit">
	</form>
	</div>
	
	<div class="Login">
		<h4>Login</h4>
	<form action='/books/process' method='post'>
		Email<input type="text" name="email"><br>
		<br>Password <input type="password" name="password">
		<br><input type ="submit" value="Login"></h3></p>
		<input type="hidden" value="submit"> 
	</form>	
	</div>	



</body>
</html>