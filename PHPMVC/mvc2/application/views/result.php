<html>
<head>
	<title> Survey Form</title>
	<style type="text/css">
#result h4{
	border: 1px soild black;
}
</style>
</head>
<body>
	<div id ="result">
		<h4><?php echo "Thanks for submitting this form! You have submitted this form  times now" ?></h4>
		<h5><?php  echo "Submitted Information"?></h5>
		<h5><?php  echo "Name". $Yourname?></h5>
		<h5><?php  echo "Dojo Location". $Location?></h5>
		<h5><?php  echo "Favourite language". $Language?></h5>
	</div>
	<p><button type ="submit" value= "submit">Go back:</button></p>

</body>
</html>