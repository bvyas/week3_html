<?php
session_start();

if(isset($_POST))
{
	$_SESSION['yourname'] = $_POST['yourname'];

	$_SESSION['location'] = $_POST['location'];

	$_SESSION['language'] = $_POST['language'];

	$_SESSION['comment'] = $_POST['comment'];
}
header('Location: result.php');

?>


