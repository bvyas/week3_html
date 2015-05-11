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
			echo "<option>" . $states[$i] . "<option>" ;
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
		array_push($states, 'NY' , 'NJ' , 'DE');
		foreach($states as $value)
		{
			echo "<option>" . $value . "</option>";
		}
	 ?>
	</select>

</body>
</html>

