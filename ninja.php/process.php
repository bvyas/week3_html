<?php
session_start();
if(isset($_POST['building']) == 'farm')
{
	$_SESSION['gold'] += $_SESSION['farm'];
	header('Location: index.php');
}
if(isset($_POST['building']) == 'Cave')
{
	$_SESSION['gold'] += $_SESSION['Cave'];	
	header('Location: index.php');
	
}
if(isset($_POST['building']) == 'House')
{
	$_SESSION['gold'] += $_SESSION['House'];
	header('Location: index.php');
}
if(isset($_POST['building']) == 'Casino')
{
	$_SESSION['gold'] += $_SESSION['Casino'];
	header('Location: index.php');
}
?>