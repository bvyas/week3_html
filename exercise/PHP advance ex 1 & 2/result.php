<?php
session_start();
?>
<html>
<head>
	<title>Survey Form Result</title>
	<style type="text/css">
		h3, #submit{
			text-align: center;
		}

		#form{
			display: inline-block;
			border: solid 1px black;
			width: 500px;
			height: 250px;
			text-align: center;
			padding-top: 40px;
		}	
	</style>
</head>
<body>
	<div id ="result">
		<p><h3>Thanks for submitting this form! You have submitted this form <?php echo $_SESSION['counter']. " " ;?>times now.</h3></p>
		<p><h3>submitted Information</h3></p>
		Name:<?php echo $_SESSION["name"];?></br>
		Dojo Location:<?php echo $_SESSION["location"];?></br>
		Favourite Language:<?php echo $_SESSION["language"];?></br>
		Comment:<?php echo $_SESSION["Comment"];?></br>
	</div>
</body>
</html>		





