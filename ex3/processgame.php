<?php
session_start();

// echo "came here";

if(isset($_POST))
{
	if($_SESSION['num_rand'] > $_POST['myvalue'])
	{
		echo "Too Low.  ";
	}
	elseif($_SESSION['num_rand'] < $_POST['myvalue'])
	{
		 echo "Too high. ";
	}
	elseif($_SESSION['num_rand'] == $_POST['myvalue'])
	{
		 // echo $_POST['num_rand']." was the right number." ;

		 header('Location: resultnum.php');
		 die();
	}
}	
	
	// die();	
?>


