<?php
echo 'something'
echo phpinfo();
?>




<?php
echo 'top of file';
?>
<!doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>PHP trial</title>
</head>
<style type="text/css">
	.header{
	color:red;
}
</style>
<body>

<h1 class ="<?php echo 'header' ; ?>"<?php echo 'Hellow Coding Dojo?'; ?></h1>

</body>

</html>
<?php
echo 'bottom of file';
?>



<?php
<!doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>PHP trial</title>
</head>
<body>
$A = array(2,3,'hello');
	


</body>

</html>
?>
<!doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>PHP trial</title>
</head>
<body>
$A = array(2,3,'hello');
	<li><?php echo '$A[0]'><li>;


</body>

</html>
<?php
for($i=1; $i<100; $i++)
{
	if(i%2==0){
		$description = "odd number";
	}
	else
	{
		$description = "even number";
	}

}
echo $description ."";
?>


<html>
<!doctype html>
<head>
	<meta charset = "UTF-8">
	<title>States</title>	
</head>
<body>
	<select>
	<?php
		$states = array('CA' ,'WA' , 'VA' , 'UT' , 'AZ');
		for($i=0; $i<count($states); $i++)
		{
			echo "<option>" . $value . "</option>";
		}
	 ?>
	</select>
	<select>
	<?php
		$states = array('CA' ,'WA' , 'VA' , 'UT' , 'AZ');
		foreach($states as $value)
		{
			echo "<option>" . $value . "</option>";
		}
	 ?>
	</select>
	<select>
	<?php
		$states = array('CA' ,'WA' , 'VA' , 'UT' , 'AZ');
		foreach(array_push($states, 'NJ' , 'NY' , 'DE');
		{
			echo "<option>" . $value . "</option>";
		}
	 ?>
	</select>

</body>
</html>






<h1 class ="<?php echo 'header' ; ?>"<?php echo 'Hellow Coding Dojo?'; ?></h1>