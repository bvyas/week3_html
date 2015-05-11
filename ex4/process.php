<?php
session_start();
if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	if(filter_var($_POST['myemail'], FILTER_VALIDATE_EMAIL))
	{
		echo "The email address you entered is a valid 
		email address! Thank you!";
	}
	else
	{	
		$_SESSION['myemail'] = $errors;
		echo "Wrong email address, please enter it again";
		//header('location: index.php');
	}
}
?>

