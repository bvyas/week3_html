<?php
session_start();
//include('new-connection.php');
require_once('new-connection.php');

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	if(filter_var($_POST['myemail'], FILTER_VALIDATE_EMAIL))
	{
		echo $_POST['myemail'];
		$myemail = escape_this_string($post['myemail']);
		$query = "INSERT INTO user (email, created_at, updated_at) VALUES ('{$_POST[myemail]}',NOW(), NOW())";
		run_mysql_query($query);	
		$_SESSION['sucess'] = "user registerd sucessfully with $_POST[myemail] email address ";  	
		// insert_new_user($_POST['myemail']);
		// echo "The email address you entered is a valid email address! Thank you!";
	}
	else
	{	
		$_SESSION['myemail'] = $errors;
		echo "Wrong email address, please enter it again";
		//header('location: index.php');
	}

}	
?>

