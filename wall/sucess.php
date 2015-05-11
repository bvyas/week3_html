<?php
	session_start();
	echo "Congratulations! you registered sucessfully!";
	$_SESSION['sucess'] = "You have registerd sucessfully!";
?>		
<html>
<head>
	<title></title>
</head>
</body>
	<a href='process.php'>LOG OFF! </a>;	

	<div class = "messages">
		<?php
			if(isset($_POST['messages']))
			{
				$array = array_reverse($_POST['messages']);
				foreach ($array as $message) 
				{
					echo $message;
				}
			}	
			?>

				
</body>
</html>	