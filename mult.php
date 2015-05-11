<?php

function multiply($array)
{
	$number_of_values = count($array);
	foreach($array as $value)
	{
		$B = $value * 5; 
		var_dump($B);
	}
		
}
$arr = array(2,4,10,16);
multiply($arr);
?>