<?php
session_start();
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
	if(strlen($_POST['password']) > 6)	
	{
		$errors[] = "Not vaild password";
	}
	if(empty($_POST['confirm_password']) || (!$_POST['password']))	
	{
		$errors[] = "confirm_password";
	}
	$birth = explode('/' , $_POST['birth_date']);

	if(!checkdate($birth [0], $birth[1],$birth[2]))	
	{
		$errors[] = "Not vaild birth_date";
	}
	if(empty($_POST['profile_picture']))	
	{
		$errors[] = "Not vaild profile_picture";
	}
	if(count($errors) > 0)
	{
		$_SESSION['errors'] = $errors;
		header('location: index.php');
		die();
	}
	else
	{
		$_SESSION['sucess'] = "You have registerd sucessfully!";
		header('location: sucess.php');
		die();
	}
}
?>