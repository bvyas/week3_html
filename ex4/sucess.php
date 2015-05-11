<?php
session_start();
		if(!isset($_SESSION['sucess']))
		{
			echo "you have entered correct information";
		}
		else
		{
			header('location: index.php');
		}
?>		
	