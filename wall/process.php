<?php
session_start();
require_once('new-connection.php');
if(isset($_POST['register']) && $_POST['register'] == 'login')
{
	$errors = array();
		if(is_numeric($_POST['first_name']) || empty($_POST['first_name']))	
		{
		$errors[] = "Not vaild first_name";

		}
		if(is_numeric($_POST['last_name']) || empty($_POST['last_name']))	
		{
		$errors[] = "Not vaild last_name";
		}	
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
		$first_name = escape_this_string($_POST['first_name']);
		$last_name = escape_this_string($_POST['last_name']);
		$email = escape_this_string($_POST['email']);
		$password = escape_this_string($_POST['password']);
		$query = "INSERT INTO users(first_name, last_name, email, password) VALUES 
		('{$first_name}', '{$last_name}', '{$email}','{$password}')";
		run_mysql_query($query);
		$_SESSION['sucess'] = "register sucessfully";		
	}
}
if(isset($_POST['message']) && $_POST['message'] == 'post')
{	
		$message = escape_this_string($_POST['post_message']);
		$user_id = $_POST['user_id'];
		$query = "INSERT INTO messages(message, user_id, created_at, updated_at) VALUES 
		('{$message}', {$user_id}, NOW(), NOW())";
		run_mysql_query($query);
		$_SESSION['sucess'] = "Message entered into database";
		header('location: index.php');		
}	
if(isset($_POST['comment']) && $_POST['comment'] == 'post')	
{
		$comment = escape_this_string($_POST['post_comment']);
		$message_id = $_POST['message_id'];
		$user_id = $_POST['user_id'];
		$query = "INSERT INTO comments(messages_id, users_id, comment, created_at, updated_at)
		VALUES ({$message_id}, {$user_id}, '{$comment}', NOW(), NOW())";
		run_mysql_query($query);		
		header('location: index.php');			
}	
?>


