<?php
session_start();
if(!isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 1;

}
else
{
	$_SESSION['counter'] = $_SESSION['counter'] + 1;
}
var_dump($_SESSION);
?>
<html>
<head>
	<title>Counter 10</title>
	<style type="text/css">
		h1, h2, #submit{
			text-align: center;
		}
		#submit{
			color: blue;
		}
	</style>
</head>
<body>

	<h1>You came to this site</h1>
	<h2><?= $_SESSION['counter'] ?> times</h2>
	<div id = "submit">
	<form action ="process.php" method="post">
	<input type ="submit" value="Reset">
	</div>

</body>
</html>