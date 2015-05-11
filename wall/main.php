<?php
	session_start();
	echo "Congratulations! {$_POST[first_name]} you registered sucessfully!"
	$_SESSION['sucess'] = "You have registerd sucessfully!";
?>		
<html>
<head>
	<title></title>
</head>
</body>
	<a href='process.php'>LOG OFF! </a>;		
</body>
</html>	