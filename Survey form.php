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
	<title>Survey Form</title>
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
	<div id = "form">
		<form action ="process.php" method="post">
		<input type ="text" value="Your Name">
		<input type ="text" value="Location">
		<input type ="text" value="Language">
		<input type ="text" value="Comment">
	</div>

</body>
</html>