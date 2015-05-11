<?php
session_start();
require_once('new-connection.php');
if(isset($_POST['action']) && $_POST['action'] == 'Submit')
{
	$errors = array();

	if(isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = "Bad email";
		}
	if(is_numeric($_POST['first_name']) || empty($_POST['first_name']))	
	{
		$errors[] = "Not vaild first_name";

	}
	if(is_numeric($_POST['last_name']) || empty($_POST['last_name']))	
	{
		$errors[] = "Not vaild last_name";
	}
	if (empty($_POST['password']))
	{
		$errors[] = "Not vaild password";
	}
	if(empty($_POST['confirm_password']) || (!$_POST['password']))	
	{
		$errors[] = " Doen't match password";
	}
	if(count($errors) > 0)
	{
		$_SESSION['errors'] = $errors;
		header('location: index.php');
		die();
	}
	else
	{
		$email = escape_this_string($_POST['email']);
		$first_name = escape_this_string($_POST['first_name']);
		$last_name = escape_this_string($_POST['last_name']);
		$password = escape_this_string($_POST['password']);
		$confirm_password = escape_this_string($_POST['confirm_password']);

		$query = "INSERT INTO company (email, first_name, last_name, password, confirm_password) VALUES 
		('{$email}' , '{$first_name}' , '{$last_name}', '{$password}', '{$confirm_password}')";
		run_mysql_query($query);
	
		$_SESSION['sucess'] = "You have registerd sucessfully!";

		
		header('location: sucess.php');
		die();
	}
}
if(isset($_POST['register']) && $_POST['register'] == 'login')
{
	$errors = array();

		if(isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = "Please enter a valid email";
		}
		if (empty($_POST['password']))
		{
			$errors[] = "Not vaild password";
		}

		if(count($errors) > 0)
		{
			$_SESSION['errors'] = $errors;
			header('location: index.php');
			die();
		}
	else
	{
		$email = escape_this_string($_POST['email']);
		$password = escape_this_string($_POST['password']);
		$query = "INSERT INTO log (email, password) VALUES 
		('{$email}','{$password}')";
		run_mysql_query($query);
	
		$_SESSION['sucess'] = "You have registerd sucessfully!";		
		header('location: sucess.php');
		die();
	}
}	

?>