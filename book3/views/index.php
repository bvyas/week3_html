<html>
<head>
	<title>Book Review</title>
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
	<h3>Welcome!</h3>	
	<div class="Register">
		<?php echo validation_errors(); ?>
		<?php echo form_open('/books/signup_validation'); ?>
		<h4>Register</h4>
		<p>Name  <input type="text" value="<?php echo set_value('name'); ?>"</p>
		<p>Alias <input type="text" value="<?php echo set_value('alias'); ?>"</p>
		<p>Email  <input type="text" value="<?php echo $this->input->post('email'); ?>"</p>
		<p>Password <input type="password" value="<?php echo set_value('password'); ?>"</p>
		<h6>*Password should be at least 8 characters</h6>
		<p>CPassword  <input type="password" value="<?php echo set_value('cpassword'); ?>"</p>
		<p><h3><input type ="submit" value="Register"></h3></p>
		<input type="hidden" value="submit">
	</form>
	</div>
	
	<div class="Login">
		<h4>Login</h4>
		<?php echo validation_errors(); ?>
		<?php echo form_open('form'); ?>
		<p>Email<input type="text" name="email" value="<?php echo set_value('email'); ?>"</p> 
		<p>Password <input type="password" name="password" value="<?php echo set_value('password'); ?>"</p>
		<p><h3><input type ="submit" value="Login"></h3></p>
		<input type="hidden" value="submit"> 
	</form>
	
	</div>	
</body>
</html>