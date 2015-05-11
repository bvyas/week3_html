<?php
session_start();
if(isset($_SESSION['success']))
{
	echo " You registered successfully!";
	unset($_SESSION['success']);
}
?>
